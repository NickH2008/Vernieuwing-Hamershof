<header class="header">
    <div class="header-left">
        <button class="menu-btn" id="menuBtn" type="button" aria-label="Open menu" aria-controls="sideMenu" aria-expanded="false">
            <svg viewBox="0 0 24 24" class="menu-icon" aria-hidden="true" focusable="false">
                <path d="M4 6H20M4 12H20M4 18H20"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"/>
            </svg>
        </button>
    </div>

    <div class="header-center">
        <a href="home" aria-label="Ga naar home"><?php include __DIR__ . '/logo_header.php'; ?></a>
    </div>

    <div class="header-right"></div>
</header>

<div class="menu-backdrop" id="menuBackdrop" hidden></div>

<aside class="side-menu" id="sideMenu" aria-hidden="true">
    <div class="menu-content">
        <button class="close-btn" id="closeMenu" type="button" aria-label="Sluit menu">
            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                <g clip-path="url(#closeIconClip)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5967 14.5L29 26.3126L26.9019 28.3095L14.5 16.4968L2.09671 28.3095L0 26.3126L12.4019 14.5L0 2.68729L2.09671 0.69043L14.5 12.5031L26.9019 0.69043L29 2.68729L16.5967 14.5Z" fill="black"/>
                </g>
                <defs>
                    <clipPath id="closeIconClip">
                        <rect width="29" height="29" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
        </button>

        <div class="menu-logo">
            <a href="home" aria-label="Ga naar home">
                <?php include __DIR__ . '/logo_menu_header.php'; ?>
            </a>
        </div>


        <nav class="menu-nav" aria-label="Hoofdmenu">
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="tehuur">Te Huur</a></li>
                <li><a href="plattegrond">Plattegrond</a></li>
                <li><a href="nieuws">Nieuws</a></li>
                <li><a href="agenda">Agenda</a></li>
                <li><a href="winkels">winkels</a></li>
                <li><a href="evenementen">evenementen</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
        </nav>

        <div class="menu-bottom">
            <div class="login">
                <span class="login-icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 4H5C3.34315 4 2 5.34315 2 7V15C2 16.6569 3.34315 18 5 18H8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <path d="M12 7L16 11L12 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16 11H7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </span>
                <a href="#">Winkelier Inloggen</a>
            </div>

                <div class="footer-info">
                    <div class="social">
                        <p>Follow us</p>
                        <div class="icons">
                            <a href="#" class="social-icon social-icon-facebook" aria-label="Facebook">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19 0C20.6569 0 22 1.34315 22 3V19C22 20.6569 20.6569 22 19 22H3C1.34315 22 0 20.6569 0 19V3C0 1.34315 1.34315 0 3 0H19ZM19 2C19.5523 2 20 2.44772 20 3V19C20 19.5523 19.5523 20 19 20H14V12.9999H16.0762C16.5066 12.9999 16.8887 12.7245 17.0249 12.3161L17.4679 10.9871C17.6298 10.5014 17.2683 9.9999 16.7564 9.9999H14V7.99992C14 7.49992 14.5 6.99992 15 6.99992H17C17.5523 6.99992 18 6.5522 18 5.99992V5.31393C18 4.99091 17.7937 4.7013 17.4813 4.61887C16.1705 4.27295 15 4.27295 15 4.27295C12.5 4.27295 11 5.99992 11 7.49992V9.9999H9C8.44772 9.9999 8 10.4476 8 10.9999V11.9999C8 12.5522 8.44771 12.9999 9 12.9999H11V20H3C2.44772 20 2 19.5523 2 19V3C2 2.44772 2.44772 2 3 2H19Z" fill="#0F0F0F"/>
                                </svg>
                            </a>
                            <a href="#" class="social-icon social-icon-instagram" aria-label="Instagram">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8889 0C19.2639 0 22 2.73604 22 6.11111V15.8889C22 19.2639 19.2639 22 15.8889 22H6.11111C2.73604 22 0 19.2639 0 15.8889V6.11111C0 2.73604 2.73604 0 6.11111 0H15.8889ZM15.8889 2.44444H6.11111C4.08607 2.44444 2.44444 4.08607 2.44444 6.11111V15.8889C2.44444 17.914 4.08607 19.5556 6.11111 19.5556H15.8889C17.914 19.5556 19.5556 17.914 19.5556 15.8889V6.11111C19.5556 4.08607 17.914 2.44444 15.8889 2.44444ZM11 6.11111C13.7 6.11111 15.8889 8.29994 15.8889 11C15.8889 13.7 13.7 15.8889 11 15.8889C8.29994 15.8889 6.11111 13.7 6.11111 11C6.11111 8.29994 8.29994 6.11111 11 6.11111ZM11 8.55556C9.64993 8.55556 8.55556 9.64993 8.55556 11C8.55556 12.3501 9.64993 13.4444 11 13.4444C12.3501 13.4444 13.4444 12.3501 13.4444 11C13.4444 9.64993 12.3501 8.55556 11 8.55556ZM16.5 4.27778C17.175 4.27778 17.7222 4.82499 17.7222 5.5C17.7222 6.17501 17.175 6.72222 16.5 6.72222C15.825 6.72222 15.2778 6.17501 15.2778 5.5C15.2778 4.82499 15.825 4.27778 16.5 4.27778Z" fill="black"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="contact">
                        <p>Contact us</p>
                        <div class="contact-details">
                            <span>info@hamershof.nl</span>
                            <span class="divider" aria-hidden="true">|</span>
                            <span>0613558468</span>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</aside>
<script src="/public/js_public/header.js" defer></script>
