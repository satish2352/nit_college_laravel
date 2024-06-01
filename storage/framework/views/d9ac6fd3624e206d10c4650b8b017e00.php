<?php //$common_navbar_data = App\Http\Controllers\Website\IndexController::getCommonWebNavbarData();

// print_r($data_output_tollfreenumber);
// die();

?>
<style>
    /* .search-data input{
        border: none !important;
    }
    #search-box{
        border: none !important;
    } */
</style>
<div class="wrapper">
    <!--Header Start-->
    <header class="wf100 header-two">
        <div id="closetopbar" class="topbar wf100">
            <div class="container-fluid">
                <div class="row head_row">
                    <div class="col-6 d-flex align-items-center new_head_ul mt-1">

                        <ul class="quick-links">
                            <li><a href="<?php echo e(route('site-map')); ?>">
                                    <?php if(session('language') == 'mar'): ?>
                                        <?php echo e(Config::get('marathi.SITE_MAP.SITE_MAP')); ?>

                                    <?php else: ?>
                                        <?php echo e(Config::get('english.SITE_MAP.SITE_MAP')); ?>

                                    <?php endif; ?>
                                </a></li>
                            <li><a href="<?php echo e(route('list-vacancies')); ?>">
                                    <?php if(session('language') == 'mar'): ?>
                                        <?php echo e(Config::get('marathi.VACANCIES.VACANCIES')); ?>

                                    <?php else: ?>
                                        <?php echo e(Config::get('english.VACANCIES.VACANCIES')); ?>

                                    <?php endif; ?>
                                </a></li>
                            <li><a href="<?php echo e(route('report-incident-crowdsourcing')); ?>">
                                    <?php if(session('language') == 'mar'): ?>
                                        <?php echo e(Config::get('marathi.NAVBAR.REPORT_IT')); ?>

                                    <?php else: ?>
                                        <?php echo e(Config::get('english.NAVBAR.REPORT_IT')); ?>

                                    <?php endif; ?>
                                </a></li>
                            <li><a href="<?php echo e(route('list-rti')); ?>">
                                    <?php if(session('language') == 'mar'): ?>
                                        <?php echo e(Config::get('marathi.RTI.RTI_MAIN_LINK')); ?>

                                    <?php else: ?>
                                        <?php echo e(Config::get('english.RTI.RTI_MAIN_LINK')); ?>

                                    <?php endif; ?>
                                </a></li>
                        </ul>

                    </div>
                    <div class="col-4 d-flex align-items-center new_head_ul2 mt-1">
                        <ul class="quick-links">
                            


                        </ul>

                        
                        <!-- Add the "title" attribute to each button -->
                        <button class="webpage_zoom_btn" id="zoomouttextbody" data-toggle="tooltip" data-placement="top"
                            title="Decrease Font Size">A-</button>
                        <button class="webpage_zoom_btn" id="resetfontsize" data-toggle="tooltip" data-placement="top"
                            title="Normal Font Size">A</button>
                        <button class="webpage_zoom_btn" id="zoomtextbody" data-toggle="tooltip" data-placement="top"
                            title="Increase Font Size">A+</button>

                        

                        <span id="magnify" data-toggle="tooltip" data-placement="top" title="Magnifier"><i
                                class="fa fa-search-plus" style="font-size:24px; color:#fff"></i></span>



                    </div>
                    <div class="col-2 set_volunteer">
                        <a href="<?php echo e(route('volunteer-citizen-support')); ?>" class="become-vol">
                            <?php if(session('language') == 'mar'): ?>
                                <?php echo e(Config::get('marathi.NAVBAR.BECOME_VOLUNTEER')); ?>

                            <?php else: ?>
                                <?php echo e(Config::get('english.NAVBAR.BECOME_VOLUNTEER')); ?>

                            <?php endif; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="h3-logo-row wf100">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 d-flex align-items-center">
                        <ul class="header-contact new_city_head_change">
                            <li class="city-exp for_pl_pr"> <i class="fa fa-street-view"></i>
                                <strong>
                                    <?php if(session('language') == 'mar'): ?>
                                        <?php echo e(Config::get('marathi.HOME_PAGE.CITY')); ?>

                                    <?php else: ?>
                                        <?php echo e(Config::get('english.HOME_PAGE.CITY')); ?>

                                    <?php endif; ?>
                                </strong>
                            </li>
                            <li class="header-weather for_pl_pr"> <i class="fas fa-cloud-sun"></i>
                                <?php echo e(getTempratureData()->temprature); ?>°C
                                / <?php echo e(getTempratureData()->temprature * 1.8 + 32); ?>°F
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <?php $__empty_1 = true; $__currentLoopData = $common_navbar_data['website_logo']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <?php if(session('language') == 'mar'): ?>
                                <div class="h3-logo"> <a href="/home">
                                        <img src="<?php echo e(Config::get('DocumentConstant.WEBSITE_LOGO_VIEW')); ?><?php echo e($item['logo']); ?>"
                                            alt="Logo Not Found" style="width: 50%;"></a></div>
                            <?php else: ?>
                                <div class="h3-logo"> <a href="/home">
                                        <img src="<?php echo e(Config::get('DocumentConstant.WEBSITE_LOGO_VIEW')); ?><?php echo e($item['logo']); ?>"
                                            alt="Logo Not Found" style="width: 50%;"></a></div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="col-4 lang-position">
                        <div class="row d-flex justify-content-end">
                            <div class="col-md-9 col-sm-9">
                                <ul class="header-contact new_city_head_change">
                                    <li class="city-exp for_pl_pr">                                     
                                        <span class="serch-main">
                                            <ul class="navbar-nav mr-auto">
                                                <li class="nav-item dropdown search-data">
                                                    <input type="text" id="search-box" placeholder="Search..."
                                                        style="border: none">
                                                    
                                                    <div id="search-results" class="dropdown-menu show"
                                                        aria-labelledby="navbarDropdown"></div>
                                                </li>
                                            </ul>
                                        </span>                                      
                                </ul>

                            </div>

                            <div class="col-3">

                                <ul class="header-contact">

                                    <li class="set_lang">
                                        <form method="post" action="">
                                            <span class="lang_title">
                                                <?php if(session('language') == 'mar'): ?>
                                                    <?php echo e(Config::get('marathi.HOME_PAGE.SELECT_LANGUAGE')); ?>

                                                <?php else: ?>
                                                    <?php echo e(Config::get('english.HOME_PAGE.SELECT_LANGUAGE')); ?>

                                                <?php endif; ?>
                                            </span>
                                            <strong>
                                                <select name="language" class="website_language_select">
                                                    <option value="">Select Language</option>
                                                    <option value="en" <?php if ($language == 'en') {
                                                        echo 'selected';
                                                    }
                                                    ?>>English</option>
                                                    <option value="mar" <?php if ($language == 'mar') {
                                                        echo 'selected';
                                                    }
                                                    ?>>Marathi</option>
                                                </select>
                                            </strong>
                                        </form>
                                    </li>
                                </ul>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row nav-pd">
            <div class="col-md-12 nav-pd-col navbar_bg-color">

                <nav id="navbar_top" class="navbar navbar-expand-lg bg-white">
                    <div class="container-fluid ">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse nav-center flex-wrap" id="navbarSupportedContent">
                            <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menu_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $menu_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menu_data_new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <ul class="navbar-nav mb-lg-0 ">
                                        <?php if($key == '0'): ?>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link <?php if(sizeof($menu_data[1]) > 0): ?> dropdown-toggle <?php endif; ?>"
                                                    href="<?php if($menu_data_new['is_static'] == true): ?> <?php echo e($menu_data_new['url']); ?> 
                                                 <?php else: ?> 
                                                 <?php echo e(url('/pages/' . $menu_data_new['url'])); ?> <?php endif; ?>"
                                                    role="button"
                                                    <?php if(sizeof($menu_data[1]) > 0): ?> data-bs-toggle="dropdown" <?php endif; ?>
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <?php if(session('language') == 'mar'): ?>
                                                        <?php echo e($menu_data_new['menu_name_marathi']); ?>

                                                    <?php else: ?>
                                                        <?php echo e($menu_data_new['menu_name_english']); ?>

                                                    <?php endif; ?>
                                                </a>
                                                <?php if(sizeof($menu_data[1]) > 0): ?>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <?php $__currentLoopData = $menu_data[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menu_data_sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="<?php if($menu_data_sub['is_static'] == true): ?> <?php echo e(url($menu_data_sub['url'])); ?> 
                                                                 <?php else: ?> 
                                                                 <?php echo e(url('/pages/' . $menu_data_sub['url'])); ?> <?php endif; ?>"
                                                                    target="_self" title="">
                                                                    <?php if(session('language') == 'mar'): ?>
                                                                        <?php echo e($menu_data_sub['menu_name_marathi']); ?>

                                                                    <?php else: ?>
                                                                        <?php echo e($menu_data_sub['menu_name_english']); ?>

                                                                    <?php endif; ?>
                                                                </a>
                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <form class="mt-2 mb-2 mobi_langs" method="post" action="">
                                <span class="lang_title">
                                    <?php if(session('language') == 'mar'): ?>
                                        <?php echo e(Config::get('marathi.HOME_PAGE.SELECT_LANGUAGE')); ?>

                                    <?php else: ?>
                                        <?php echo e(Config::get('english.HOME_PAGE.SELECT_LANGUAGE')); ?>

                                    <?php endif; ?>
                                </span>
                                <strong>
                                    <select name="language" class="mobile_language_select">
                                        <option value="">Select Language</option>
                                        <option value="en" <?php if ($language == 'en') {
                                            echo 'selected';
                                        }
                                        ?>>English</option>
                                        <option value="mar" <?php if ($language == 'mar') {
                                            echo 'selected';
                                        }
                                        ?>>Marathi</option>
                                    </select>
                                </strong>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        var searchBox = $('#search-box');
        var searchResults = $('#search-results');

        searchBox.on('input', function() {

            var query = $(this).val();

            if (query.length >= 1) {
                // Send an AJAX request to the search route
                $.ajax({
                    url: '<?php echo e(route('search')); ?>',
                    method: 'GET',
                    data: {
                        query: query
                    },
                    success: function(response) {
                        // alert('hii');
                        console.log(response);
                        // Clear previous results
                        searchResults.empty();
                        // Display the search results
                        $.each(response, function(index, subMenu) {
                            var url = subMenu[0].url;
                            var title = subMenu[0].menu_name_english;
                            // Append the result to the search results container
                            searchResults.append(
                                '<a class="dropdown-item" href="' +
                                url + '">' +
                                title +
                                '</a>');
                        });
                    }
                });
            } else {
                // Clear search results when the query is too short
                searchResults.empty();
            }
        });
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.getElementById('navbar_top').classList.add('fixed-top');
                // add padding top to show content behind navbar
                navbar_height = document.querySelector('.navbar').offsetHeight;
                document.body.style.paddingTop = navbar_height + 'px';
            } else {
                document.getElementById('navbar_top').classList.remove('fixed-top');
                // remove padding top from body
                document.body.style.paddingTop = '0';
            }
        });
    });
</script>
<?php /**PATH D:\xampp\htdocs\nit_final_project\resources\views/website/layout/navbar.blade.php ENDPATH**/ ?>