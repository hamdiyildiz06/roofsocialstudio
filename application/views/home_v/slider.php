<style>

    .video-background-holder {
        position: relative;
        background-color: black;
        height: calc(100vh - 0px);
        min-height: 25rem;
        width: 100%;
        overflow: hidden;
    }

    .video-background-holder video {
        position: absolute;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: 4;
        -ms-transform: translateX(-50%) translateY(-50%);
        -moz-transform: translateX(-50%) translateY(-50%);
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
    }

    .video-background-content {
        position: relative;
        z-index: 4;
    }

    .video-background-overlay {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: black;
        opacity: 0.5;
        z-index: 5;
    }

    code {
        padding: 0 0.15rem;
        background: #f5f5f5;
        border-radius: 0.2rem;
    }

</style>

<!-- Demo navbar -->
<!--<nav class="navbar dark navbar-expand-lg navbar-inverse bg-white py-3 shadow-sm transparent-header-on">-->
<!--    <div class="container"><a href="#" class="navbar-brand"> <b>Navbar</b></a>-->
<!--        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>-->
<!--        <div id="navbarSupportedContent" class="collapse navbar-collapse">-->
<!--            <ul class="navbar-nav ml-auto">-->
<!--                <li class="nav-item active"><a href="#" class="nav-link">Home <span class="sr-only">(current)</span></a></li>-->
<!--                <li class="nav-item"><a href="#" class="nav-link">Link</a></li>-->
<!--                <li class="nav-item dropdown"><a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>-->
<!--                    <div aria-labelledby="navbarDropdown" class="dropdown-menu"><a href="#" class="dropdown-item">Action</a><a href="#" class="dropdown-item">Another action</a>-->
<!--                        <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Something else here</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="nav-item"><a href="#" tabindex="-1" aria-disabled="true" class="nav-link disabled">Disabled</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->
<!-- End -->

<!-- Background video -->
<div class="video-background-holder">
    <div class="video-background-overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
<!--        <source src="https://todocreativeagency.com/wp-content/uploads/2021/11/ankara-reklam-ajansi.mp4" type="video/mp4">-->
        <source src="<?= base_url("videos/20220619-022115-831.mp4");?>" type="video/mp4">
    </video>
    <div class="video-background-content container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
                <h1 class="display-4">Markanıza değer katma amacı için buradayız.</h1>
                <p class="lead mt-4">Roofsocialstudio Ailesi Olarak</p>
                <p class="lead mt-4">Bizi Daha Yakından Tanımak istermisiniz ?
                    <a href="<?= base_url("urun-listesi"); ?>" class="text-white">
                        <u></u>
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- End -->
