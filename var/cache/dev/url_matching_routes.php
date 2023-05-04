<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/blog' => [[['_route' => 'app_admin_blog_index', '_controller' => 'App\\Controller\\AdminBlogController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/blog/new' => [[['_route' => 'app_admin_blog_new', '_controller' => 'App\\Controller\\AdminBlogController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/comment' => [[['_route' => 'app_admin_comment_index', '_controller' => 'App\\Controller\\AdminCommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/comment/new' => [[['_route' => 'app_admin_comment_new', '_controller' => 'App\\Controller\\AdminCommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/application' => [[['_route' => 'app_application_index', '_controller' => 'App\\Controller\\ApplicationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back' => [[['_route' => 'index', '_controller' => 'App\\Controller\\BackController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/back/courses' => [[['_route' => 'course_index', '_controller' => 'App\\Controller\\BackController::course_index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/services' => [[['_route' => 'service_index', '_controller' => 'App\\Controller\\BackController::service_index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/events' => [[['_route' => 'event_index', '_controller' => 'App\\Controller\\BackController::event_index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/blogs' => [[['_route' => 'blog_index', '_controller' => 'App\\Controller\\BackController::blog_index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/freelances' => [[['_route' => 'freelance_index', '_controller' => 'App\\Controller\\BackController::freelance_index_index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/blog' => [[['_route' => 'display_blog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, true, false, null]],
        '/blog/add' => [[['_route' => 'addBlog', '_controller' => 'App\\Controller\\BlogController::addBlog'], null, null, null, false, false, null]],
        '/blog/bot' => [[['_route' => 'app_bot', '_controller' => 'App\\Controller\\BotController::index'], null, null, null, false, false, null]],
        '/comment' => [[['_route' => 'display_comment', '_controller' => 'App\\Controller\\CommentController::index'], null, null, null, false, false, null]],
        '/home' => [
            [['_route' => 'display_admin', '_controller' => 'App\\Controller\\CommentController::indexAdmin'], null, null, null, false, false, null],
            [['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
        ],
        '/addComment' => [[['_route' => 'add_comment', '_controller' => 'App\\Controller\\CommentController::addComment'], null, null, null, false, false, null]],
        '/Error' => [[['_route' => 'error', '_controller' => 'App\\Controller\\CommentController::erreur'], null, null, null, false, false, null]],
        '/course' => [[['_route' => 'app_course_index', '_controller' => 'App\\Controller\\CourseController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/course/courses' => [[['_route' => 'app_course_front', '_controller' => 'App\\Controller\\CourseController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/course/new' => [[['_route' => 'app_course_new', '_controller' => 'App\\Controller\\CourseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/course/course/triASC' => [[['_route' => '/course/triASC', '_controller' => 'App\\Controller\\CourseController::TriASC'], null, null, null, false, false, null]],
        '/course/course/triDESC' => [[['_route' => '/course/triDESC', '_controller' => 'App\\Controller\\CourseController::triDESC'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'app_event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/event/back' => [[['_route' => 'app_event_index_back', '_controller' => 'App\\Controller\\EventController::indexBack'], null, ['GET' => 0], null, false, false, null]],
        '/event/Event' => [[['_route' => 'app_event_event_front', '_controller' => 'App\\Controller\\EventController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/event/new' => [[['_route' => 'app_event_new', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/freelance' => [[['_route' => 'app_freelance_index', '_controller' => 'App\\Controller\\FreelanceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/freelance/Freelancer' => [[['_route' => 'app_freelance_indexFree', '_controller' => 'App\\Controller\\FreelanceController::indexFree'], null, ['GET' => 0], null, false, false, null]],
        '/freelance/new' => [[['_route' => 'app_freelance_new', '_controller' => 'App\\Controller\\FreelanceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/freelanceRecommendedForYou/py' => [[['_route' => 'app_freelance_recommend', '_controller' => 'App\\Controller\\FreelanceController::recommendation'], null, ['GET' => 0], null, false, false, null]],
        '/hackathon' => [[['_route' => 'app_hackathon_index', '_controller' => 'App\\Controller\\HackathonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/hackathon/Hackathon' => [[['_route' => 'app_hackathon_hackathon_front', '_controller' => 'App\\Controller\\HackathonController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/hackathon/new' => [[['_route' => 'app_hackathon_new', '_controller' => 'App\\Controller\\HackathonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/lesson' => [[['_route' => 'app_lesson_index', '_controller' => 'App\\Controller\\LessonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/lesson/new' => [[['_route' => 'app_lesson_new', '_controller' => 'App\\Controller\\LessonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/packag' => [[['_route' => 'app_packag_index', '_controller' => 'App\\Controller\\PackagController::index'], null, ['GET' => 0], null, true, false, null]],
        '/packag/new' => [[['_route' => 'app_packag_new', '_controller' => 'App\\Controller\\PackagController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/service' => [[['_route' => 'app_service_index', '_controller' => 'App\\Controller\\ServiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/service/services' => [[['_route' => 'app_service_service_front', '_controller' => 'App\\Controller\\ServiceController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/service/new' => [[['_route' => 'app_service_new', '_controller' => 'App\\Controller\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/workshop' => [[['_route' => 'app_workshop_index', '_controller' => 'App\\Controller\\WorkshopController::index'], null, ['GET' => 0], null, true, false, null]],
        '/workshop/new' => [[['_route' => 'app_workshop_new', '_controller' => 'App\\Controller\\WorkshopController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/courses/search' => [[['_route' => 'search_courses'], null, ['POST' => 0], null, false, false, null]],
        '/pdf' => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\CourseController::pdf'], null, null, null, false, false, null]],
        '/courses/back' => [[['_route' => 'back', '_controller' => 'App\\Controller\\CourseBackController::index'], null, null, null, false, false, null]],
        '/statistics' => [[['_route' => 'statistics', '_controller' => 'App\\Controller\\ServiceController::index'], null, null, null, false, false, null]],
        '/services/back' => [[['_route' => 'backend', '_controller' => 'App\\Controller\\ServiceBackController::index'], null, null, null, false, false, null]],
        '/search-users' => [[['_route' => 'search_users', '_controller' => 'App\\Controller\\EventController::searchOrdonnance'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|blog/([^/]++)(?'
                            .'|(*:36)'
                            .'|/edit(*:48)'
                            .'|(*:55)'
                        .')'
                        .'|comment/([^/]++)(?'
                            .'|(*:82)'
                            .'|/edit(*:94)'
                            .'|(*:101)'
                        .')'
                    .')'
                    .'|pplication(?'
                        .'|/([^/]++)(?'
                            .'|(*:136)'
                            .'|/(?'
                                .'|edit(*:152)'
                                .'|select(*:166)'
                            .')'
                            .'|(*:175)'
                        .')'
                        .'|applicants/([^/]++)(*:203)'
                    .')'
                .')'
                .'|/b(?'
                    .'|ack/(?'
                        .'|courses/([^/]++)(*:241)'
                        .'|services/([^/]++)(*:266)'
                        .'|events/([^/]++)(*:289)'
                        .'|blogs/([^/]++)(*:311)'
                        .'|freelances/([^/]++)(*:338)'
                    .')'
                    .'|log(?'
                        .'|/(?'
                            .'|removeBlog/([^/]++)(*:376)'
                            .'|modifBlog/([^/]++)(*:402)'
                            .'|star/([^/]++)(*:423)'
                        .')'
                        .'|afficherBlog/([^/]++)(*:453)'
                    .')'
                .')'
                .'|/removeComment/([^/]++)(*:486)'
                .'|/modifComment/([^/]++)(*:516)'
                .'|/course/(?'
                    .'|([^/]++)(?'
                        .'|(*:546)'
                        .'|/edit(*:559)'
                        .'|(*:567)'
                    .')'
                    .'|search(*:582)'
                    .'|([^/]++)(*:598)'
                    .'|course/([^/]++)(*:621)'
                .')'
                .'|/event/([^/]++)(?'
                    .'|(*:648)'
                    .'|/edit(*:661)'
                    .'|(*:669)'
                .')'
                .'|/freelance(?'
                    .'|/([^/]++)(?'
                        .'|/(?'
                            .'|myOffersBO(*:717)'
                            .'|([^/]++)(*:733)'
                        .')'
                        .'|(*:742)'
                    .')'
                    .'|Freelancer/([^/]++)(*:770)'
                    .'|editOffer/([^/]++)(*:796)'
                    .'|filter(?'
                        .'|/([^/]++)(*:822)'
                        .'|ByDate/([^/]++)(*:845)'
                    .')'
                .')'
                .'|/hackathon/(?'
                    .'|([^/]++)(*:877)'
                    .'|hackathon/([^/]++)/edit(*:908)'
                    .'|([^/]++)(*:924)'
                .')'
                .'|/lesson/(?'
                    .'|course/([^/]++)/lesson(?'
                        .'|(*:969)'
                        .'|s(*:978)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:998)'
                        .'|/edit(*:1011)'
                        .'|(*:1020)'
                    .')'
                .')'
                .'|/packag/([^/]++)(?'
                    .'|(*:1050)'
                    .'|/edit(*:1064)'
                    .'|(*:1073)'
                .')'
                .'|/service/(?'
                    .'|([^/]++)(*:1103)'
                    .'|service/([^/]++)/packag(*:1135)'
                    .'|([^/]++)(?'
                        .'|/edit(*:1160)'
                        .'|(*:1169)'
                    .')'
                .')'
                .'|/workshop/([^/]++)(?'
                    .'|(*:1201)'
                    .'|/edit(*:1215)'
                    .'|(*:1224)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:1262)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1302)'
                    .'|wdt/([^/]++)(*:1323)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1370)'
                            .'|router(*:1385)'
                            .'|exception(?'
                                .'|(*:1406)'
                                .'|\\.css(*:1420)'
                            .')'
                        .')'
                        .'|(*:1431)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        36 => [[['_route' => 'app_admin_blog_show', '_controller' => 'App\\Controller\\AdminBlogController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        48 => [[['_route' => 'app_admin_blog_edit', '_controller' => 'App\\Controller\\AdminBlogController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        55 => [[['_route' => 'app_admin_blog_delete', '_controller' => 'App\\Controller\\AdminBlogController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        82 => [[['_route' => 'app_admin_comment_show', '_controller' => 'App\\Controller\\AdminCommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        94 => [[['_route' => 'app_admin_comment_edit', '_controller' => 'App\\Controller\\AdminCommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        101 => [[['_route' => 'app_admin_comment_delete', '_controller' => 'App\\Controller\\AdminCommentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        136 => [[['_route' => 'app_application_new', '_controller' => 'App\\Controller\\ApplicationController::new'], ['idOffer'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        152 => [[['_route' => 'app_application_edit', '_controller' => 'App\\Controller\\ApplicationController::edit'], ['idapp'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        166 => [[['_route' => 'app_application_select', '_controller' => 'App\\Controller\\ApplicationController::select'], ['idapp'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        175 => [[['_route' => 'app_application_delete', '_controller' => 'App\\Controller\\ApplicationController::delete'], ['idapp'], ['POST' => 0], null, false, true, null]],
        203 => [[['_route' => 'app_application_showSecific', '_controller' => 'App\\Controller\\ApplicationController::show'], ['idFreelance'], ['GET' => 0], null, false, true, null]],
        241 => [[['_route' => 'course_delete', '_controller' => 'App\\Controller\\BackController::delete'], ['cid'], ['POST' => 0], null, false, true, null]],
        266 => [[['_route' => 'service_delete', '_controller' => 'App\\Controller\\BackController::deleteS'], ['id'], ['POST' => 0], null, false, true, null]],
        289 => [[['_route' => 'event_delete', '_controller' => 'App\\Controller\\BackController::deleteE'], ['eventId'], ['POST' => 0], null, false, true, null]],
        311 => [[['_route' => 'blog_delete', '_controller' => 'App\\Controller\\BackController::deleteB'], ['id'], ['POST' => 0], null, false, true, null]],
        338 => [[['_route' => 'freelance_delete', '_controller' => 'App\\Controller\\BackController::deleteFreelancer'], ['idfreelance'], ['POST' => 0], null, false, true, null]],
        376 => [[['_route' => 'supp_blog', '_controller' => 'App\\Controller\\BlogController::suppClassroom'], ['id'], null, null, false, true, null]],
        402 => [[['_route' => 'modif_blog', '_controller' => 'App\\Controller\\BlogController::modifBlog'], ['id'], null, null, false, true, null]],
        423 => [[['_route' => 'star', '_controller' => 'App\\Controller\\BlogController::yourAction'], ['id'], null, null, false, true, null]],
        453 => [[['_route' => 'showBlog', '_controller' => 'App\\Controller\\BlogController::showBlog'], ['id'], null, null, false, true, null]],
        486 => [[['_route' => 'supp_comment', '_controller' => 'App\\Controller\\CommentController::deleteComment'], ['id'], null, null, false, true, null]],
        516 => [[['_route' => 'modif_comment', '_controller' => 'App\\Controller\\CommentController::modifcomment'], ['id'], null, null, false, true, null]],
        546 => [[['_route' => 'app_course_show', '_controller' => 'App\\Controller\\CourseController::show'], ['cid'], ['GET' => 0], null, false, true, null]],
        559 => [[['_route' => 'app_course_edit', '_controller' => 'App\\Controller\\CourseController::edit'], ['cid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        567 => [[['_route' => 'app_course_delete', '_controller' => 'App\\Controller\\CourseController::delete'], ['cid'], ['POST' => 0], null, false, true, null]],
        582 => [[['_route' => 'search', '_controller' => 'App\\Controller\\CourseController::search'], [], null, null, false, false, null]],
        598 => [[['_route' => 'app_course_filter', '_controller' => 'App\\Controller\\CourseController::filter'], ['cat'], ['POST' => 0], null, false, true, null]],
        621 => [[['_route' => 'course_filter', '_controller' => 'App\\Controller\\CourseController::filterCoursesByCategory'], ['category'], null, null, false, true, null]],
        648 => [[['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['eventId'], ['GET' => 0], null, false, true, null]],
        661 => [[['_route' => 'app_event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['eventId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        669 => [[['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['eventId'], ['POST' => 0], null, false, true, null]],
        717 => [[['_route' => 'app_freelance_myOffersBO', '_controller' => 'App\\Controller\\FreelanceController::myOffers'], ['idBO'], ['GET' => 0], null, false, false, null]],
        733 => [[['_route' => 'app_freelance_show', '_controller' => 'App\\Controller\\FreelanceController::show'], ['idfreelance', 'idBO'], ['GET' => 0], null, false, true, null]],
        742 => [[['_route' => 'app_freelance_delete', '_controller' => 'App\\Controller\\FreelanceController::delete'], ['idfreelance'], ['POST' => 0], null, false, true, null]],
        770 => [[['_route' => 'app_freelance_showFree', '_controller' => 'App\\Controller\\FreelanceController::showFree'], ['idfreelance'], ['GET' => 0], null, false, true, null]],
        796 => [[['_route' => 'app_freelance_edit', '_controller' => 'App\\Controller\\FreelanceController::edit'], ['idfreelance'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        822 => [[['_route' => 'app_freelance_searchCategory', '_controller' => 'App\\Controller\\FreelanceController::searchCategory'], ['category'], ['GET' => 0], null, false, true, null]],
        845 => [[['_route' => 'app_freelance_searchDate', '_controller' => 'App\\Controller\\FreelanceController::searchByDate'], ['date'], ['GET' => 0], null, false, true, null]],
        877 => [[['_route' => 'app_hackathon_show', '_controller' => 'App\\Controller\\HackathonController::show'], ['hackathon'], ['GET' => 0], null, false, true, null]],
        908 => [[['_route' => 'app_hackathon_edit', '_controller' => 'App\\Controller\\HackathonController::edit'], ['hackathon'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        924 => [[['_route' => 'app_hackathon_delete', '_controller' => 'App\\Controller\\HackathonController::delete'], ['event'], ['POST' => 0], null, false, true, null]],
        969 => [[['_route' => 'app_lesson_course_front', '_controller' => 'App\\Controller\\LessonController::showLessonsByCourseFront'], ['cid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        978 => [[['_route' => 'app_lesson_course', '_controller' => 'App\\Controller\\LessonController::showLessonsByCourse'], ['cid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        998 => [[['_route' => 'app_lesson_show', '_controller' => 'App\\Controller\\LessonController::show'], ['lid'], ['GET' => 0], null, false, true, null]],
        1011 => [[['_route' => 'app_lesson_edit', '_controller' => 'App\\Controller\\LessonController::edit'], ['lid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1020 => [[['_route' => 'app_lesson_delete', '_controller' => 'App\\Controller\\LessonController::delete'], ['lid'], ['POST' => 0], null, false, true, null]],
        1050 => [[['_route' => 'app_packag_show', '_controller' => 'App\\Controller\\PackagController::show'], ['idP'], ['GET' => 0], null, false, true, null]],
        1064 => [[['_route' => 'app_packag_edit', '_controller' => 'App\\Controller\\PackagController::edit'], ['idP'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1073 => [[['_route' => 'app_packag_delete', '_controller' => 'App\\Controller\\PackagController::delete'], ['idP'], ['POST' => 0], null, false, true, null]],
        1103 => [[['_route' => 'app_service_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1135 => [[['_route' => 'app_packag_service_front', '_controller' => 'App\\Controller\\ServiceController::showPackagsByServiceFront'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1160 => [[['_route' => 'app_service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1169 => [[['_route' => 'app_service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1201 => [[['_route' => 'app_workshop_show', '_controller' => 'App\\Controller\\WorkshopController::show'], ['workshop'], ['GET' => 0], null, false, true, null]],
        1215 => [[['_route' => 'app_workshop_edit', '_controller' => 'App\\Controller\\WorkshopController::edit'], ['workshop'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1224 => [[['_route' => 'app_workshop_delete', '_controller' => 'App\\Controller\\WorkshopController::delete'], ['event'], ['POST' => 0], null, false, true, null]],
        1262 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        1302 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1323 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1370 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1385 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1406 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1420 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1431 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
