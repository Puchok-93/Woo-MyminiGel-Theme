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
                        <a class="footer-social__link" href="#"></a>
                    </li>
                    <li class="footer-social">
                        <a class="footer-social__link" href="#"></a>
                    </li>
                    <li class="footer-social">
                        <a class="footer-social__link" href="#"></a>
                    </li>
                    <li class="footer-social">
                        <a class="footer-social__link" href="#"></a>
                    </li>
                </ul>
                <div class="footer-contact">
                    <a class="footer-contact__link" href="mailto:support@myminigel.com">support@myminigel.com</a>
                    <p class="footer-contact__text">Full week: 9am to 10pm</p>
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