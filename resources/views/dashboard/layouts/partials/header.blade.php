<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        Page Title - Category - SmartAdmin v4.5.1
    </title>
    <meta name="description" content="Page Title">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="mytheme" rel="stylesheet" media="screen, print" href="#">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="stylesheet" media="screen, print" href="css/your_styles.css">
</head>

<body class="mod-bg-1 ">
    <script>
        'use strict';

        var classHolder = document.getElementsByTagName("BODY")[0],

            themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) : {},
            themeURL = themeSettings.themeURL || '',
            themeOptions = themeSettings.themeOptions || '';

        if (themeSettings.themeOptions) {
            classHolder.className = themeSettings.themeOptions;
            console.log("%c✔ Theme settings loaded", "color: #148f32");
        } else {
            console.log("%c✔ Heads up! Theme settings is empty or does not exist, loading default settings...",
                "color: #ed1c24");
        }
        if (themeSettings.themeURL && !document.getElementById('mytheme')) {
            var cssfile = document.createElement('link');
            cssfile.id = 'mytheme';
            cssfile.rel = 'stylesheet';
            cssfile.href = themeURL;
            document.getElementsByTagName('head')[0].appendChild(cssfile);

        } else if (themeSettings.themeURL && document.getElementById('mytheme')) {
            document.getElementById('mytheme').href = themeSettings.themeURL;
        }

        var saveSettings = function() {
            themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item) {
                return /^(nav|header|footer|mod|display)-/i.test(item);
            }).join(' ');
            if (document.getElementById('mytheme')) {
                themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
            };
            localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
        }

        var resetSettings = function() {
            localStorage.setItem("themeSettings", "");
        }
    </script>
    <div class="page-wrapper">
        <div class="page-inner">
            <aside class="page-sidebar">
                <div class="page-logo">
                    <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                        <img src="img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                        <span class="page-logo-text mr-1">SmartAdmin WebApp</span>
                        <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                        <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                    </a>
                </div>
                <nav id="js-primary-nav" class="primary-nav" role="navigation">
                    <div class="nav-filter">
                        <div class="position-relative">
                            <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
                            <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                                <i class="fal fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="info-card">
                        <img src="img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle" alt="{{$userInformation->name}}<">
                        <div class="info-card-text">
                            <a href="#" class="d-flex align-items-center text-white">
                                <span class="text-truncate text-truncate-sm d-inline-block">
                                    {{$userInformation->name}}
                                </span>
                            </a>
                            <span class="d-inline-block text-truncate text-truncate-sm">Toronto, Canada</span>
                        </div>
                        <img src="img/card-backgrounds/cover-2-lg.png" class="cover" alt="cover">
                        <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                            <i class="fal fa-angle-down"></i>
                        </a>
                    </div>

                    <ul id="js-nav-menu" class="nav-menu">
                        <li class="active">
                            <a href="blank.html" title="Blank Project" data-filter-tags="blank page">
                                <i class="fal fa-globe"></i>
                                <span class="nav-link-text" data-i18n="nav.blankpage">Blank Project</span>
                            </a>
                        </li>
                        <li class="nav-title">Navigation Title</li>
                        <li>
                            <a href="#" title="Category" data-filter-tags="category">
                                <i class="fal fa-file"></i>
                                <span class="nav-link-text" data-i18n="nav.category">Category</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="javascript:void(0);" title="Menu child" data-filter-tags="utilities menu child">
                                        <span class="nav-link-text" data-i18n="nav.utilities_menu_child">Sub-category</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);" title="Sublevel Item" data-filter-tags="utilities menu child sublevel item">
                                                <span class="nav-link-text" data-i18n="nav.utilities_menu_child_sublevel_item">Sublevel
                                                    Item</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" title="Another Item" data-filter-tags="utilities menu child another item">
                                                <span class="nav-link-text" data-i18n="nav.utilities_menu_child_another_item">Another
                                                    Item</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="disabled">
                                    <a href="javascript:void(0);" title="Disabled item" data-filter-tags="utilities disabled item">
                                        <span class="nav-link-text" data-i18n="nav.utilities_disabled_item">Disabled
                                            item</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="active open">
                            <a href="#" title="Category" data-filter-tags="category">
                                <i class="fal fa-plus"></i>
                                <span class="nav-link-text" data-i18n="nav.category">Open Item</span>
                            </a>
                            <ul>
                                <li class="active open">
                                    <a href="javascript:void(0);" title="Menu child" data-filter-tags="utilities menu child">
                                        <span class="nav-link-text" data-i18n="nav.utilities_menu_child">Open
                                            Sub-category</span>
                                    </a>
                                    <ul>
                                        <li class="active">
                                            <a href="javascript:void(0);" title="Sublevel Item" data-filter-tags="utilities menu child sublevel item">
                                                <span class="nav-link-text" data-i18n="nav.utilities_menu_child_sublevel_item">Active
                                                    Item</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="filter-message js-filter-message bg-success-600"></div>
                </nav>

                <div class="nav-footer shadow-top">
                    <a href="#" onclick="return false;" data-action="toggle" data-class="nav-function-minify" class="hidden-md-down">
                        <i class="ni ni-chevron-right"></i>
                        <i class="ni ni-chevron-right"></i>
                    </a>
                    <ul class="list-table m-auto nav-footer-buttons">
                        <li>
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Chat logs">
                                <i class="fal fa-comments"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Support Chat">
                                <i class="fal fa-life-ring"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Make a call">
                                <i class="fal fa-phone"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <div class="page-content-wrapper">
                <header class="page-header" role="banner">
                    <div class="page-logo">
                        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                            <img src="img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                            <span class="page-logo-text mr-1">SmartAdmin WebApp</span>
                            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                        </a>
                    </div>
                    <div class="hidden-md-down dropdown-icon-menu position-relative">
                        <a href="#" class="header-btn btn js-waves-off" data-action="toggle" data-class="nav-function-hidden" title="Hide Navigation">
                            <i class="ni ni-menu"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify" title="Minify Navigation">
                                    <i class="ni ni-minify-nav"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-fixed" title="Lock Navigation">
                                    <i class="ni ni-lock-nav"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="hidden-lg-up">
                        <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
                            <i class="ni ni-menu"></i>
                        </a>
                    </div>
                    <div class="search">
                        <form class="app-forms hidden-xs-down" role="search" action="page_search.html" autocomplete="off">
                            <input type="text" id="search-field" placeholder="Search for anything" class="form-control" tabindex="1">
                            <a href="#" onclick="return false;" class="btn-danger btn-search-close js-waves-off d-none" data-action="toggle" data-class="mobile-search-on">
                                <i class="fal fa-times"></i>
                            </a>
                        </form>
                    </div>
                    <div class="ml-auto d-flex">
                        <div class="hidden-sm-up">
                            <a href="#" class="header-icon" data-action="toggle" data-class="mobile-search-on" data-focus="search-field" title="Search">
                                <i class="fal fa-search"></i>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="header-icon" data-toggle="dropdown" title="My Apps">
                                <i class="fal fa-cube"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated w-auto h-auto">
                                <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center rounded-top">
                                    <h4 class="m-0 text-center color-white">
                                        Quick Shortcut
                                        <small class="mb-0 opacity-80">User Applications & Addons</small>
                                    </h4>
                                </div>
                                <div class="custom-scroll h-50">
                                    <ul class="app-list">
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-2 icon-stack-3x color-primary-600"></i>
                                                    <i class="base-3 icon-stack-2x color-primary-700"></i>
                                                    <i class="ni ni-settings icon-stack-1x text-white fs-lg"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Services
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-list-item hover-white">
                                                <span class="icon-stack">
                                                    <i class="base-2 icon-stack-3x color-primary-400"></i>
                                                    <i class="base-10 text-white icon-stack-1x"></i>
                                                    <i class="ni md-profile color-primary-800 icon-stack-2x"></i>
                                                </span>
                                                <span class="app-list-name">
                                                    Account
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="#" data-toggle="dropdown" title="{{$userInformation->email}}" class="header-icon d-flex align-items-center justify-content-center ml-2">
                                <img src="img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle" alt="{{$userInformation->name}}<">
                                <span class="ml-1 mr-1 text-truncate text-truncate-header hidden-xs-down">Me</span>
                                <i class="ni ni-chevron-down hidden-xs-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                                <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                                    <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                        <span class="mr-2">
                                            <img src="img/demo/avatars/avatar-admin.png" class="rounded-circle profile-image" alt="{{$userInformation->name}}<">
                                        </span>
                                        <div class="info-card-text">
                                            <div class="fs-lg text-truncate text-truncate-lg">{{$userInformation->name}}
                                            </div>
                                            <span class="text-truncate text-truncate-md opacity-80">{{$userInformation->email}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-divider m-0"></div>
                                <a href="#" class="dropdown-item" data-action="app-reset">
                                    <span data-i18n="drpdwn.reset_layout">Reset Layout</span>
                                </a>
                                <a href="#" class="dropdown-item" data-toggle="modal" data-target=".js-modal-settings">
                                    <span data-i18n="drpdwn.settings">Settings</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </header>