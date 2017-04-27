                   </main>
                    <nav>
                        <button class="button-off" id="top-button" onclick="location.href = 'https://vle.cant-col.ac.uk'">VLE Login</button>
                        <button class="button-off" onclick="location.href = 'https://login.microsoftonline.com/'">Office 365</button>
                        <button class="button-off" onclick="location.href = 'https://rems.canterburycollege.ac.uk/portal/html/HOM/portalhome.htm#Home'">REMs</button>
                        <button class="button-off" onclick="location.href = 'https://etracker.cant-col.ac.uk/'">e-Trackr</button>
                        <button class="button-off" onclick="location.href = 'http://intranet.cant-col.ac.uk'">Intranet</button>
                        <button class="button-off" onclick="location.href = 'https://mail.cant-col.ac.uk'">Staff Outlook</button>
                        <button class="button-off" id="bottom-button" onclick="location.href = 'https://www.bksblive.co.uk/bksblive1/CanterburyCollege/default.aspx'">BKSB</button>
                        <a href="https://canterburycollege.ac.uk/"><img src="/application/elements/theme/global/ResponsiveLoginDesign/assets/img/logo.png" height="30"></a>
                    </nav>
                </div><!--end div class=login-panel-main-->
            </div><!--end div class=login-panel-->
            <footer>
                <p class="copy">© Copyright <?= date("Y") ?> by Canterbury College</p>
            </footer>
            <?php if (isset($is_concrete5)) {
            
                 Loader::element('footer_required');

            } ?>
        </div><!--end div class=custom-login-panel-->            
    </body>
</html>