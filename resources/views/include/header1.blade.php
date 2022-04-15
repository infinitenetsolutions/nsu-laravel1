@include('include.header')

<style>
    #mainNav {
        font-family: 'Open Sans', Helvetica, Arial, sans-serif;
        margin: 0;
        text-transform: uppercase;
        font-size: 20px;
        padding: 0;
        padding-top: 20px;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
        background-color: #e3b121;

    }

    .inner-page {
        background-color: white;
        text-align: left;
    }

    /* news */
    .news-list {
        position: relative;
    }

    .blog-img {
        padding: 0px 0px 24px 0px;
        border: 1px solid rgba(163, 145, 97, 0.5);
        text-align: center;
    }

    .news-list img {
        height: 320px;
        width: 100%;
        object-fit: cover;
    }

    .blog-content {
        padding: 26px 15px 0px 15px;
    }

    .news-list h2 {
        font-size: 19px;
        line-height: 28px;
        font-weight: 400;
        color: #001845;
        text-transform: capitalize;
    }

    @media (max-width: 576px) {
        .bg-university-color {
            background: #aa841f;
            margin-top: -89px;
        }

        #mainNav.navbar-shrink {
            top: 51px !important;
        }

        .navbar-expand-lg {
            top: 51px !important;
        }

        .mobile_nav .mobile_nav_icon {
            top: 81px !important;
        }

        #mainNav.navbar-shrink .mobile_nav .mobile_nav_icon {
            top: 74px !important;
        }
    }
</style>