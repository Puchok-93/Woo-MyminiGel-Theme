
        <?php
            global $woo_myminigel_theme_options;
            $woo_myminigel_theme_options = woo_myminigel_theme_options();
        ?>

        
        <footer class="footer">
            <div class="footer-subscribe">
                    <h2 class="footer-subscribe__title">Follow the latest news and promotions:</h2>
                    <form class="footer-subscribe-form" name="subscribe_footer">
                        <div class="footer-subscribe-form__field">
                            <input class="footer-subscribe-form__input" type="text" name="email" placeholder="Your email">
                        </div>      
                        <button class="footer-subscribe-form__submit" type="submit">Subscribe</button>
                    </form>
                    <p class="footer-subscribe__description">
                        By subscribing to the newsletter, you agree to the 
                        <a href="">terms and conditions of the privacy policy</a> and <a href="">the personal data processing policy</a>
                    </p>
            </div>
            <div class="footer-site-map">
                <?php 
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'container' => false,
                            'menu_class' => 'footer-link-list'
                        )
                    )
                ?>
            </div>
            <div class="footer-support">
                <ul class="footer-social-list">
                    <li class="footer-social">
                        <a class="footer-social__link" href="#">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.6991 27.2941H15.3009C14.0022 27.2941 12.9412 26.2331 12.9412 24.9344V15.5362C12.9412 14.2375 14.0022 13.1765 15.3009 13.1765H24.6991C25.9978 13.1765 27.0588 14.2375 27.0588 15.5362V24.9344C27.0588 26.2389 26.0036 27.2941 24.6991 27.2941Z" fill="white"/>
                                <path d="M20.0029 23.8618C19.0346 23.8618 18.1244 23.4849 17.4402 22.8008C16.7561 22.1167 16.3793 21.2064 16.3793 20.2382C16.3793 19.2699 16.7561 18.3597 17.4402 17.6755C18.1244 16.9914 19.0346 16.6145 20.0029 16.6145C20.9711 16.6145 21.8814 16.9914 22.5655 17.6755C23.2496 18.3597 23.6265 19.2699 23.6265 20.2382C23.6265 21.2064 23.2496 22.1167 22.5655 22.8008C21.8756 23.4849 20.9711 23.8618 20.0029 23.8618ZM20.0029 17.3857C18.4317 17.3857 17.1504 18.6612 17.1504 20.2382C17.1504 21.8094 18.4259 23.0907 20.0029 23.0907C21.5741 23.0907 22.8554 21.8152 22.8554 20.2382C22.8496 18.667 21.5741 17.3857 20.0029 17.3857Z" fill="#FA9A84"/>
                                <path d="M24.3328 16.4955C24.7171 16.4955 25.0286 16.184 25.0286 15.7997C25.0286 15.4155 24.7171 15.104 24.3328 15.104C23.9486 15.104 23.6371 15.4155 23.6371 15.7997C23.6371 16.184 23.9486 16.4955 24.3328 16.4955Z" fill="#FA9A84"/>
                            </svg>
                        </a>
                    </li>
                    <li class="footer-social">
                        <a class="footer-social__link" href="#">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.4328 12.6266L23.0354 12H20.6306V17.6431L20.6225 23.1551C20.6266 23.1961 20.6306 23.2411 20.6306 23.2821C20.6306 24.6621 19.5082 25.7883 18.1235 25.7883C16.7388 25.7883 15.6163 24.6662 15.6163 23.2821C15.6163 21.902 16.7388 20.7759 18.1235 20.7759C18.4102 20.7759 18.6888 20.8291 18.9469 20.9192V18.1673C18.6806 18.1222 18.4061 18.0976 18.1235 18.0976C15.2681 18.1017 12.9412 20.4278 12.9412 23.2862C12.9412 26.1446 15.2681 28.4706 18.1276 28.4706C20.9871 28.4706 23.314 26.1446 23.314 23.2862V16.7299C24.3504 17.7659 25.69 18.7774 27.173 19.1009V16.2876C25.5631 15.575 23.9612 13.4701 23.4328 12.6266Z" fill="white"/>
                        </svg>
                        </a>
                    </li>
                    <li class="footer-social">
                        <a class="footer-social__link" href="#">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27.4123 27.0588H13.2935C11.4044 27.0588 9.88235 25.3881 9.88235 23.3331V16.6669C9.88235 14.6035 11.412 12.9412 13.2935 12.9412H27.4123C29.3015 12.9412 30.8235 14.6119 30.8235 16.6669V23.3331C30.8312 25.3965 29.3015 27.0588 27.4123 27.0588Z" fill="white"/>
                                <path d="M24.0571 19.8956L18.1176 16.4706V23.3206L24.0571 19.8956Z" fill="#FA9A84"/>
                            </svg>
                        </a>
                    </li>
                    <li class="footer-social">
                        <a class="footer-social__link" href="#">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7841 23.2566C19.3055 23.2734 19.7765 23.963 21.1557 23.963C23.7458 23.9798 25.5287 21.9951 26.0837 19.3881C28.018 10.3561 14.8484 9.63289 13.5028 17.0671C13.1833 18.8163 13.7047 20.8346 15.067 21.4905C16.1098 21.9951 16.1771 20.5487 15.8576 19.9263C14.4447 17.168 16.1435 14.6787 18.3636 13.9723C20.4492 13.2995 21.9293 13.8546 23.0562 15.0151C24.5027 16.512 23.8468 20.5823 22.1312 21.8774C21.5257 22.3315 20.4156 22.4324 19.8437 21.8942C18.6664 20.801 20.4829 18.4799 20.2138 16.7811C19.9447 15.0992 17.2872 15.3515 17.1526 17.8239C17.0854 19.0854 17.4554 19.4554 17.1695 20.7169C16.7153 22.7352 15.3362 26.8559 16.3117 28.4706C17.7413 27.7978 18.4477 23.7612 18.7841 23.2566Z" fill="white"/>
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="footer-contact">
                    <?php if ( ! empty( $woo_myminigel_theme_options['support_email'] ) ): ?>
                        <a class="footer-contact__link" href="mailto:<?php echo $woo_myminigel_theme_options['support_email'] ?>">
                            <?php echo $woo_myminigel_theme_options['support_email'] ?>
                        </a>
                    <?php endif; ?>
                    <?php if ( ! empty( $woo_myminigel_theme_options['shop_schedule'] ) ): ?>
                        <p class="footer-contact__text">
                            <?php echo $woo_myminigel_theme_options['shop_schedule'] ?>
                        </p>
                    <?php endif; ?>
                    <!-- <p class="footer-contact__text">Full week: 9am to 10pm</p> -->
                </div>
                <div class="footer-copyright">
                    <p class="footer-copyright__text">
                        © 2024–2024 MiniGEL Company. 
                        The Site Administration is not responsible for the materials posted by 
                        Users (including information and images), their content and quality.
                    </p>
                </div>
            </div>
        </footer>
        
        <?php wp_footer(); ?>
        
    </body>
</html>