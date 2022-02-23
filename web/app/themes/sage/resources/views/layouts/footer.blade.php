<footer class="content-info">
    <div class="container">
        {{--  @php(dynamic_sidebar('sidebar-footer'))--}}
        <div class="row">
            <div class="footer__container align-items-center">
                <div class="copyright">
                    ©<?php echo date('Y'); ?> Blue Tractor Group. All Rights Reserved. |<br> <a href="/privacy-policy">Privacy Policy</a> |
                    <a href="/terms-of-use">Terms of Use</a>
                </div>
                <div class="mjhudson">
                    <a href="https://www.mjhudson.com/" target="_blank" title="MJ Hudson">
                        <img src="/app/uploads/2021/09/icon-MJHudson.svg" class="footer-logo" alt="MJ Hudson">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div> <!-- #panel ends -->
</div><!-- #app end -->

@php(do_action('get_footer'))
@php(wp_footer())
@stack('footer.scripts')
<script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=qwcdmsghz1cdfblm9ukipa" async="true"></script>
</body>
</html>
