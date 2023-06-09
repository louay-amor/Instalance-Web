<?php

namespace App\Controller;

use App\Entity\Hackathon;
use App\Entity\Event;
use App\Form\HackathonFilterType;
use App\Form\HackathonType;
use App\Repository\HackathonRepository;
use Doctrine\ORM\EntityManagerInterface;
use Endroid\QrCode\Builder\BuilderInterface;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\MailerService;
use App\Services\QRCodeService;
#[Route('/hackathon')]
class HackathonController extends AbstractController
{
    #[Route('/', name: 'app_hackathon_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager,Request $request,HackathonRepository $hackathonRepository): Response
    {
        /*$events = $entityManager
            ->getRepository(Event::class)
            ->findAll();*/
        $form = $this->createForm(HackathonFilterType::class);
        $queries = $request->query->all();

        $hackathonName = $queries['inputName'] ?? '';

        $hackathons = $hackathonRepository->search($hackathonName);

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'data' => $this->renderView('hackathon/table_content.html.twig', [
                    'hackathons' => $hackathons
                ])
            ]);
        }
        return $this->render('hackathon/index.html.twig', [
            'hackathons' => $hackathons,
            'form' => $form->createView()
        ]);
    }

    #[Route('/new', name: 'app_hackathon_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,MailerService $mailerService): Response
    {
        $hackathon = new Hackathon();
        $form = $this->createForm(HackathonType::class, $hackathon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $mailerService->send("Hackathon has changed","nassim.benali@esprit.tn","mehdi.fathallah69@gmail.com","hackathon/email.html.twig",[
                "name" => $hackathon->getEvent()->getEventName(),
                "location" => $hackathon->getEvent()->getLocation()
            ]);
            $entityManager->persist($hackathon);
            $entityManager->flush();

            return $this->redirectToRoute('app_hackathon_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('hackathon/new.html.twig', [
            'hackathon' => $hackathon,
            'form' => $form,
        ]);
    }

    #[Route('/{eventId}', name: 'app_hackathon_show', methods: ['GET'])]
    public function show(Hackathon $hackathon, QRCodeService $qrCodeService,BuilderInterface $qrBuilder ): Response
    {

        $path = dirname(__DIR__, 2).'/public/uploads/';

        $data ='Hackathon name: '.$hackathon->getEvent()->getEventName()."\n\n".'description:'.$hackathon->getEvent()->getDescription()."\n"."\n". 'Location: '.$hackathon->getEvent()->getLocation();
        $qrResult = $qrBuilder
            ->size(300)
            ->margin(10)
            ->encoding(new Encoding('UTF-8'))
            ->data($data)
            ->logoPath($path.'logo.png')
            ->logoResizeToWidth('100')
            ->logoResizeToHeight('100')
            ->backgroundColor(new Color(223, 242, 255))
            ->build();

        $base64Data = $qrResult->getDataUri();
        return $this->render('hackathon/show.html.twig', [
            'hackathon' => $hackathon,
            'qrCode'=>$base64Data,
        ]);
    }

    #[Route('/{eventId}/edit', name: 'app_hackathon_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Hackathon $hackathon, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(HackathonType::class, $hackathon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_hackathon_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('hackathon/edit.html.twig', [
            'hackathon' => $hackathon,
            'form' => $form,
        ]);
    }

    #[Route('/{event}', name: 'app_hackathon_delete', methods: ['POST'])]
    public function delete(Request $request, Hackathon $hackathon, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$hackathon->getEvent(),$request->request->get('_token'))) {
            $entityManager->remove($hackathon);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_hackathon_index', [], Response::HTTP_SEE_OTHER);
    }



}
