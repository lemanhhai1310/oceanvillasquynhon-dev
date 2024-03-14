<?php
/* Template name: Accommodation */
get_header(); ?>
<div uk-parallax="bgy: -200" class="accommodation__banner uk-light uk-height-viewport uk-flex uk-flex-middle uk-flex-center lazy uk-background-blend-overlay uk-background-norepeat uk-background-fixed uk-background-center-center uk-background-cover" style="background-color: rgba(0, 0, 0, 0.5);" data-src="<?= get_theme_file_uri('/assets/images/bg_accommodation.png') ?>">
    <h1 uk-parallax="target: .accommodation__banner; start: 30vh; end: 30vh; y: 400; easing: 0;" class="accommodation__banner__title"><?php the_title(); ?></h1>
</div>
<div class="uk-section">
    <div class="uk-container">
        <div class="home__about__boxFlex uk-flex uk-flex-column uk-flex-middle uk-text-center">
            <h2 class="width-298px home__about__title">Our Rooms</h2>
            <div class="width-708px home__about__desc home__about__divider">With beautiful balcony views of the beach or garden, whether one or two bedrooms, all our residences and private villas provide intimate luxury to relax within. A full range of amenities and services ensures that all guest needs are met while highlighting the beauty and accessibility of the surrounding environment.</div>
        </div>
    </div>
    <div class="item-74px uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider="center: true">

        <ul class="uk-slider-items uk-grid" uk-grid>
            <?php for ($i=1;$i<=5;$i++): ?>
            <li class="uk-width-3-4">
                <img class="lazy uk-width" data-src="<?= get_theme_file_uri('/assets/images/img2.png') ?>" alt="">
            </li>
            <?php endfor; ?>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

    </div>
</div>
<div class="uk-section accommodation__include__section">
    <div class="uk-container">
        <h2 class="uk-text-center accommodation__include__title">Included with every stay</h2>
        <div class="item-60px width-870px uk-margin-auto">
            <div class="uk-child-width-1-2 uk-child-width-1-3@l uk-child-width-1-4@l uk-grid-small uk-grid-30-l" uk-grid>
                <?php
                $data = array(
                    array(
                        'img' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
  <path d="M24.5 1.75001C24.9423 1.74876 25.3686 1.91501 25.6933 2.21533C26.0179 2.51564 26.2168 2.92774 26.25 3.36876V24.5C26.2513 24.9423 26.085 25.3686 25.7847 25.6933C25.4844 26.0179 25.0723 26.2168 24.6313 26.25H3.50001C3.05775 26.2513 2.63142 26.085 2.30676 25.7847C1.98209 25.4844 1.78317 25.0723 1.75001 24.6313V3.50001C1.74876 3.05775 1.91501 2.63142 2.21533 2.30676C2.51564 1.98209 2.92774 1.78317 3.36876 1.75001H3.50001H24.5ZM13.125 11.375H7.87501V18.375H3.50001V24.5H24.5V18.375H21.875V21.875H13.125V11.375ZM10.5 20.125C10.7321 20.125 10.9546 20.2172 11.1187 20.3813C11.2828 20.5454 11.375 20.7679 11.375 21C11.375 21.2321 11.2828 21.4546 11.1187 21.6187C10.9546 21.7828 10.7321 21.875 10.5 21.875C10.2679 21.875 10.0454 21.7828 9.88129 21.6187C9.71719 21.4546 9.62501 21.2321 9.62501 21C9.62501 20.7679 9.71719 20.5454 9.88129 20.3813C10.0454 20.2172 10.2679 20.125 10.5 20.125ZM24.5 3.50001H3.50001V16.625H6.12501V11.375C6.12376 10.9327 6.29001 10.5064 6.59033 10.1818C6.89064 9.85709 7.30274 9.65817 7.74376 9.62501H13.125C13.5673 9.62376 13.9936 9.79001 14.3183 10.0903C14.6429 10.3906 14.8418 10.8027 14.875 11.2438V20.125H20.125V18.375C20.1238 17.9327 20.29 17.5064 20.5903 17.1818C20.8906 16.8571 21.3027 16.6582 21.7438 16.625H24.5V3.50001ZM10.5 16.625C10.7321 16.625 10.9546 16.7172 11.1187 16.8813C11.2828 17.0454 11.375 17.2679 11.375 17.5C11.375 17.7321 11.2828 17.9546 11.1187 18.1187C10.9546 18.2828 10.7321 18.375 10.5 18.375C10.2679 18.375 10.0454 18.2828 9.88129 18.1187C9.71719 17.9546 9.62501 17.7321 9.62501 17.5C9.62501 17.2679 9.71719 17.0454 9.88129 16.8813C10.0454 16.7172 10.2679 16.625 10.5 16.625ZM10.5 13.125C10.7321 13.125 10.9546 13.2172 11.1187 13.3813C11.2828 13.5454 11.375 13.7679 11.375 14C11.375 14.2321 11.2828 14.4546 11.1187 14.6187C10.9546 14.7828 10.7321 14.875 10.5 14.875C10.2679 14.875 10.0454 14.7828 9.88129 14.6187C9.71719 14.4546 9.62501 14.2321 9.62501 14C9.62501 13.7679 9.71719 13.5454 9.88129 13.3813C10.0454 13.2172 10.2679 13.125 10.5 13.125ZM19.25 6.12501C19.9462 6.12501 20.6139 6.40157 21.1062 6.89385C21.5984 7.38614 21.875 8.05381 21.875 8.75001C21.875 9.4462 21.5984 10.1139 21.1062 10.6062C20.6139 11.0984 19.9462 11.375 19.25 11.375C18.5538 11.375 17.8861 11.0984 17.3939 10.6062C16.9016 10.1139 16.625 9.4462 16.625 8.75001C16.625 8.05381 16.9016 7.38614 17.3939 6.89385C17.8861 6.40157 18.5538 6.12501 19.25 6.12501ZM19.25 7.87501C19.0179 7.87501 18.7954 7.96719 18.6313 8.13129C18.4672 8.29538 18.375 8.51794 18.375 8.75001C18.375 8.98207 18.4672 9.20463 18.6313 9.36872C18.7954 9.53282 19.0179 9.62501 19.25 9.62501C19.4821 9.62501 19.7046 9.53282 19.8687 9.36872C20.0328 9.20463 20.125 8.98207 20.125 8.75001C20.125 8.51794 20.0328 8.29538 19.8687 8.13129C19.7046 7.96719 19.4821 7.87501 19.25 7.87501Z" fill="#00ACAB"/>
</svg>',
                        'txt' => 'City skyline view',
                    ),
                    array(
                        'img' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
  <path d="M22.75 0.875002C23.3245 0.875002 23.8934 0.988165 24.4242 1.20803C24.955 1.42789 25.4373 1.75015 25.8436 2.15641C26.2498 2.56267 26.5721 3.04496 26.792 3.57576C27.0118 4.10656 27.125 4.67547 27.125 5.25C27.125 10.8413 25.725 16.7913 23.625 18.1125V27.125H21.875V18.1125C19.81 16.8175 18.4275 11.0513 18.375 5.5475V5.0575C18.4246 3.93087 18.9074 2.86691 19.7225 2.08762C20.5377 1.30833 21.6223 0.87391 22.75 0.875002ZM14.875 0.875002V16.73C16.905 17.2113 18.375 19.355 18.375 21.875C18.375 24.7363 16.4675 27.125 14 27.125C11.5325 27.125 9.625 24.7363 9.625 21.875C9.625 19.3638 11.095 17.2113 13.125 16.73V0.875002H14.875ZM1.75 0.875002H2.625C6.53625 0.875002 8.68875 6.44875 8.75 17.0625V18.375H3.5V27.125H1.75V0.875002ZM14 18.375C12.6 18.375 11.375 19.9063 11.375 21.875C11.375 23.8438 12.6 25.375 14 25.375C15.4 25.375 16.625 23.8438 16.625 21.875C16.625 19.9063 15.4 18.375 14 18.375ZM3.5 2.835V16.625H7L6.9825 15.785L6.95625 14.9538C6.71125 8.015 5.46 4.0425 3.6925 2.94L3.5875 2.8875L3.5 2.835ZM20.125 5.0925V5.52125C20.1688 9.30125 21.0263 13.51 21.875 15.4875V2.77375C21.3875 2.94508 20.9613 3.2565 20.65 3.66898C20.3387 4.08147 20.1561 4.57666 20.125 5.0925ZM23.625 2.77375V15.4875C24.4912 13.4663 25.375 9.1 25.375 5.25C25.3753 4.70693 25.2071 4.17714 24.8937 3.73364C24.5803 3.29015 24.137 2.95478 23.625 2.77375Z" fill="#00ACAB"/>
</svg>',
                        'txt' => 'Restaurant',
                    ),
                    array(
                        'img' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
  <path d="M22.75 16.625C22.75 16.8571 22.6578 17.0796 22.4937 17.2437C22.3296 17.4078 22.1071 17.5 21.875 17.5C21.6429 17.5 21.4204 17.4078 21.2563 17.2437C21.0922 17.0796 21 16.8571 21 16.625C21 16.3929 21.0922 16.1704 21.2563 16.0063C21.4204 15.8422 21.6429 15.75 21.875 15.75C22.1071 15.75 22.3296 15.8422 22.4937 16.0063C22.6578 16.1704 22.75 16.3929 22.75 16.625ZM6.125 15.75C5.89294 15.75 5.67038 15.8422 5.50628 16.0063C5.34219 16.1704 5.25 16.3929 5.25 16.625C5.25 16.8571 5.34219 17.0796 5.50628 17.2437C5.67038 17.4078 5.89294 17.5 6.125 17.5C6.35706 17.5 6.57962 17.4078 6.74372 17.2437C6.90781 17.0796 7 16.8571 7 16.625C7 16.3929 6.90781 16.1704 6.74372 16.0063C6.57962 15.8422 6.35706 15.75 6.125 15.75ZM24.2375 11.375L24.5963 12.355C25.1094 12.7602 25.5246 13.2758 25.8109 13.8636C26.0972 14.4514 26.2473 15.0962 26.25 15.75V23.625C26.25 24.0891 26.0656 24.5342 25.7374 24.8624C25.4092 25.1906 24.9641 25.375 24.5 25.375H22.75C22.2859 25.375 21.8408 25.1906 21.5126 24.8624C21.1844 24.5342 21 24.0891 21 23.625V21.875H7V23.625C7 24.0891 6.81563 24.5342 6.48744 24.8624C6.15925 25.1906 5.71413 25.375 5.25 25.375H3.5C3.03587 25.375 2.59075 25.1906 2.26256 24.8624C1.93437 24.5342 1.75 24.0891 1.75 23.625V15.75C1.75 14.3763 2.40625 13.16 3.40375 12.355L3.7625 11.375H1.75V9.625H4.375V9.75625L5.9675 5.5125C6.09213 5.17895 6.31553 4.89135 6.6079 4.6881C6.90027 4.48485 7.24768 4.37562 7.60375 4.375H20.3962C21.1225 4.375 21.7787 4.83 22.0325 5.5125L23.625 9.75625V9.625H26.25V11.375H24.2375ZM5.25 21.875H3.5V23.625H5.25V21.875ZM24.5 21.875H22.75V23.625H24.5V21.875ZM24.5 20.125V15.75C24.5 15.0538 24.2234 14.3861 23.7312 13.8938C23.2389 13.4016 22.5712 13.125 21.875 13.125H6.125C5.42881 13.125 4.76113 13.4016 4.26884 13.8938C3.77656 14.3861 3.5 15.0538 3.5 15.75V20.125H24.5ZM21.875 11.375H22.365L20.3875 6.125H7.60375L5.635 11.375H21.875ZM8.75 17.5H19.25V15.75H8.75V17.5Z" fill="#00ACAB"/>
</svg>',
                        'txt' => 'Free parking',
                    ),
                    array(
                        'img' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
  <path d="M21 22.75C21.8662 22.75 22.7062 23.0562 23.3363 23.625C23.5987 23.8787 23.9575 24.0187 24.3337 24.0625H24.5V25.8125H24.2987C23.508 25.7733 22.7546 25.4645 22.1637 24.9375C21.8433 24.6527 21.4287 24.4968 21 24.5C20.5625 24.5 20.1425 24.6487 19.8363 24.9375C19.1923 25.5077 18.3601 25.8193 17.5 25.8125C16.6399 25.8193 15.8077 25.5077 15.1637 24.9375C14.8433 24.6527 14.4287 24.4968 14 24.5C13.5625 24.5 13.1425 24.6487 12.8363 24.9375C12.1923 25.5077 11.3601 25.8193 10.5 25.8125C9.63992 25.8193 8.80772 25.5077 8.16375 24.9375C7.84332 24.6527 7.42868 24.4968 7 24.5C6.5625 24.5 6.1425 24.6487 5.83625 24.9375C5.24544 25.4645 4.49198 25.7733 3.70125 25.8125H3.5V24.0625H3.66625C4.03762 24.0296 4.38798 23.8759 4.66375 23.625C5.30773 23.0548 6.13992 22.7432 7 22.75C7.86625 22.75 8.70625 23.0562 9.33625 23.625C9.6425 23.9137 10.0625 24.0625 10.5 24.0625C10.9375 24.0625 11.3575 23.9137 11.6637 23.625C12.3073 23.0541 13.1398 22.7423 14 22.75C14.8663 22.75 15.7063 23.0562 16.3363 23.625C16.6425 23.9137 17.0625 24.0625 17.5 24.0625C17.9375 24.0625 18.3575 23.9137 18.6637 23.625C19.3077 23.0548 20.1399 22.7432 21 22.75ZM21 18.375C21.8662 18.375 22.7062 18.6812 23.3363 19.25C23.5987 19.5037 23.9575 19.6437 24.3337 19.6875H24.5V21.4375H24.2987C23.508 21.3983 22.7546 21.0895 22.1637 20.5625C21.8433 20.2777 21.4287 20.1218 21 20.125C20.5625 20.125 20.1425 20.2737 19.8363 20.5625C19.1923 21.1327 18.3601 21.4443 17.5 21.4375C16.6399 21.4443 15.8077 21.1327 15.1637 20.5625C14.8433 20.2777 14.4287 20.1218 14 20.125C13.5625 20.125 13.1425 20.2737 12.8363 20.5625C12.1923 21.1327 11.3601 21.4443 10.5 21.4375C9.63992 21.4443 8.80772 21.1327 8.16375 20.5625C7.84332 20.2777 7.42868 20.1218 7 20.125C6.5625 20.125 6.1425 20.2737 5.83625 20.5625C5.24544 21.0895 4.49198 21.3983 3.70125 21.4375H3.5V19.6875H3.66625C4.03762 19.6546 4.38798 19.5009 4.66375 19.25C5.30773 18.6798 6.13992 18.3682 7 18.375C7.86625 18.375 8.70625 18.6812 9.33625 19.25C9.6425 19.5387 10.0625 19.6875 10.5 19.6875C10.9375 19.6875 11.3575 19.5387 11.6637 19.25C12.3073 18.6791 13.1398 18.3673 14 18.375C14.8663 18.375 15.7063 18.6812 16.3363 19.25C16.6425 19.5387 17.0625 19.6875 17.5 19.6875C17.9375 19.6875 18.3575 19.5387 18.6637 19.25C19.3077 18.6798 20.1399 18.3682 21 18.375ZM17.5 2.625C18.3987 2.62387 19.2634 2.9685 19.915 3.5875C20.5666 4.20649 20.9551 5.0524 21 5.95V7.875H24.5V9.625H21V14C21.7934 13.9956 22.5647 14.261 23.1875 14.7525L23.3363 14.8837C23.5987 15.12 23.9575 15.2687 24.3337 15.3037L24.5 15.3125V17.0625H24.2987C23.508 17.0233 22.7546 16.7145 22.1637 16.1875C21.8433 15.9027 21.4287 15.7468 21 15.75C20.5625 15.75 20.1425 15.8987 19.8363 16.1875C19.1923 16.7577 18.3601 17.0693 17.5 17.0625C16.6399 17.0693 15.8077 16.7577 15.1637 16.1875C14.8433 15.9027 14.4287 15.7468 14 15.75C13.5625 15.75 13.1425 15.8987 12.8363 16.1875C12.1923 16.7577 11.3601 17.0693 10.5 17.0625C9.63992 17.0693 8.80772 16.7577 8.16375 16.1875C7.84332 15.9027 7.42868 15.7468 7 15.75C6.5625 15.75 6.1425 15.8987 5.83625 16.1875C5.24544 16.7145 4.49198 17.0233 3.70125 17.0625H3.5V15.3125H3.66625C4.03762 15.2796 4.38798 15.1259 4.66375 14.875C5.30773 14.3048 6.13992 13.9932 7 14C7.86625 14 8.70625 14.3062 9.33625 14.875C9.6425 15.1637 10.0625 15.3125 10.5 15.3125C10.9375 15.3125 11.3575 15.1637 11.6637 14.875C12.2546 14.348 13.008 14.0392 13.7987 14H14V9.625H3.5V7.875H14V6.125C14.0086 5.89518 13.9719 5.66592 13.8919 5.45031C13.8119 5.23469 13.6902 5.03694 13.5338 4.86834C13.218 4.52784 12.7798 4.32678 12.3156 4.30937C12.0858 4.30075 11.8566 4.33749 11.6409 4.41747C11.4253 4.49745 11.2276 4.61912 11.059 4.77553C10.7185 5.09141 10.5174 5.52962 10.5 5.99375V6.125H8.75C8.74924 5.41376 8.96519 4.71916 9.36909 4.13373C9.77298 3.54829 10.3457 3.0998 11.0108 2.84798C11.676 2.59617 12.4021 2.55298 13.0924 2.72418C13.7828 2.89537 14.4046 3.27282 14.875 3.80625C15.2031 3.43362 15.607 3.13544 16.0597 2.93171C16.5125 2.72798 17.0035 2.62341 17.5 2.625ZM15.75 14.455L16.1525 14.7262L16.3363 14.8837C16.6425 15.155 17.0625 15.3125 17.5 15.3125C17.8767 15.3176 18.2449 15.201 18.55 14.98L18.6637 14.8837C18.8387 14.7175 19.04 14.5775 19.25 14.455V9.625H15.75V14.455ZM17.5 4.375C17.0577 4.37375 16.6314 4.54 16.3067 4.84032C15.9821 5.14063 15.7832 5.55273 15.75 5.99375V7.875H19.25V6.125C19.25 5.66087 19.0656 5.21575 18.7374 4.88756C18.4092 4.55937 17.9641 4.375 17.5 4.375Z" fill="#00ACAB"/>
</svg>',
                        'txt' => 'Shared pool',
                    ),
                    array(
                        'img' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
  <path d="M14 17.7888C14.8516 17.7888 15.6684 18.1271 16.2707 18.7294C16.8729 19.3316 17.2112 20.1484 17.2112 21.0001C17.2112 21.8517 16.8729 22.6685 16.2707 23.2708C15.6684 23.873 14.8516 24.2113 14 24.2113C13.1483 24.2113 12.3315 23.873 11.7293 23.2708C11.127 22.6685 10.7887 21.8517 10.7887 21.0001C10.7887 20.1484 11.127 19.3316 11.7293 18.7294C12.3315 18.1271 13.1483 17.7888 14 17.7888ZM14 19.5388C13.6124 19.5388 13.2407 19.6928 12.9667 19.9668C12.6927 20.2408 12.5387 20.6125 12.5387 21.0001C12.5387 21.3876 12.6927 21.7593 12.9667 22.0333C13.2407 22.3074 13.6124 22.4613 14 22.4613C14.3875 22.4613 14.7592 22.3074 15.0332 22.0333C15.3073 21.7593 15.4612 21.3876 15.4612 21.0001C15.4612 20.6125 15.3073 20.2408 15.0332 19.9668C14.7592 19.6928 14.3875 19.5388 14 19.5388ZM14 13.1251C15.4596 13.1254 16.8904 13.5315 18.1327 14.2978C19.3749 15.0642 20.3797 16.1608 21.035 17.4651L19.7137 18.7863C19.2682 17.6327 18.484 16.641 17.4641 15.9416C16.4443 15.2422 15.2366 14.8678 14 14.8678C12.7633 14.8678 11.5557 15.2422 10.5358 15.9416C9.51596 16.641 8.7317 17.6327 8.28621 18.7863L6.96496 17.4651C7.62017 16.1608 8.625 15.0642 9.86726 14.2978C11.1095 13.5315 12.5403 13.1254 14 13.1251ZM14 8.46132C18.3575 8.46132 22.1987 10.6838 24.4475 14.0613L23.1787 15.3213C22.212 13.7564 20.8613 12.4646 19.2548 11.5687C17.6483 10.6728 15.8394 10.2025 14 10.2025C12.1605 10.2025 10.3516 10.6728 8.74515 11.5687C7.13865 12.4646 5.7879 13.7564 4.82121 15.3213L3.55246 14.0526C4.69641 12.3294 6.24914 10.9161 8.07212 9.939C9.8951 8.96186 11.9316 8.45119 14 8.45257V8.46132ZM14 3.78882C19.6437 3.78882 24.6575 6.50132 27.79 10.7013L26.5387 11.9613C25.1096 9.97048 23.2269 8.34856 21.0465 7.22974C18.8661 6.11092 16.4507 5.52737 14 5.52737C11.5493 5.52737 9.1338 6.11092 6.9534 7.22974C4.773 8.34856 2.89035 9.97048 1.46121 11.9613L0.209961 10.7101C3.34246 6.51007 8.34746 3.79757 14 3.79757V3.78882Z" fill="#00ACAB"/>
</svg>',
                        'txt' => 'WiFi',
                    ),
                    array(
                        'img' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
  <path d="M14.8754 0.875V4.40125L18.4016 2.37125L19.2766 3.885L14.8754 6.4225V12.4862L20.1254 9.45V4.375H21.8754V8.44375L24.9291 6.67625L25.8041 8.19875L22.7504 9.9575L26.2766 11.9963L25.4016 13.51L21.0004 10.9725L15.7504 14L21.0004 17.0275L25.4016 14.49L26.2766 16.0038L22.7504 18.0425L25.8041 19.8012L24.9291 21.3238L21.8754 19.5562V23.625H20.1254V18.55L14.8754 15.5138V21.5775L19.2766 24.115L18.4016 25.6287L14.8754 23.5987V27.125H13.1254V23.5987L9.59912 25.6287L8.72412 24.115L13.1254 21.5775V15.5138L7.87537 18.55V23.625H6.12537V19.5562L3.07162 21.3238L2.19662 19.8012L5.25037 18.0425L1.72412 16.0038L2.59912 14.49L7.00037 17.0275L12.2504 14L7.00037 10.9725L2.59912 13.51L1.72412 11.9963L5.25037 9.9575L2.19662 8.19875L3.07162 6.67625L6.12537 8.44375V4.375H7.87537V9.45L13.1254 12.4862V6.4225L8.72412 3.885L9.59912 2.37125L13.1254 4.40125V0.875H14.8754Z" fill="#00ACAB"/>
</svg>',
                        'txt' => 'Air conditioning',
                    ),
                    array(
                        'img' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
  <path d="M7.875 25.375V23.625H9.625V21.875H5.25C4.12227 21.8761 3.03768 21.4417 2.22253 20.6624C1.40737 19.8831 0.924622 18.8191 0.875002 17.6925V7C0.87391 5.87227 1.30833 4.78768 2.08762 3.97253C2.86691 3.15737 3.93087 2.67462 5.0575 2.625H22.75C23.8777 2.62391 24.9623 3.05833 25.7775 3.83762C26.5926 4.61691 27.0754 5.68087 27.125 6.8075V17.5C27.1261 18.6277 26.6917 19.7123 25.9124 20.5275C25.1331 21.3426 24.0691 21.8254 22.9425 21.875H18.375V23.625H20.125V25.375H7.875ZM16.625 21.875H11.375V23.625H16.625V21.875ZM22.75 4.375H5.25C4.58026 4.3738 3.93538 4.62863 3.44738 5.08735C2.95939 5.54607 2.66519 6.17396 2.625 6.8425V17.5C2.6238 18.1697 2.87863 18.8146 3.33735 19.3026C3.79607 19.7906 4.42396 20.0848 5.0925 20.125H22.75C23.4197 20.1262 24.0646 19.8714 24.5526 19.4127C25.0406 18.9539 25.3348 18.326 25.375 17.6575V7C25.3762 6.33026 25.1214 5.68538 24.6627 5.19738C24.2039 4.70939 23.576 4.41519 22.9075 4.375H22.75Z" fill="#00ACAB"/>
</svg>',
                        'txt' => 'TV',
                    ),
                    array(
                        'img' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
  <path d="M22.75 1.75C22.9218 1.75014 23.0897 1.80083 23.2328 1.89574C23.376 1.99065 23.488 2.1256 23.555 2.28375L23.59 2.38875L25.34 8.51375C25.3737 8.63556 25.3806 8.76322 25.3602 8.88795C25.3398 9.01267 25.2927 9.13151 25.222 9.23628C25.1513 9.34105 25.0588 9.42926 24.9508 9.49486C24.8428 9.56045 24.7218 9.60186 24.5963 9.61625L24.5 9.625H21.875V14H27.125V15.75H25.375V27.125H23.625V24.9025C23.1627 25.1712 22.6447 25.3299 22.1112 25.3662L21.875 25.375H6.125C5.51019 25.3747 4.9064 25.2117 4.375 24.9025V27.125H2.625V15.75H0.875V14H5.25V10.5C5.24845 10.285 5.32609 10.077 5.4681 9.91563C5.61012 9.75425 5.80658 9.65079 6.02 9.625H6.335L5.32875 7.35L6.92125 6.65L8.25125 9.625H10.5C10.715 9.62345 10.923 9.70108 11.0844 9.8431C11.2458 9.98512 11.3492 10.1816 11.375 10.395V14H20.125V9.625H17.5C17.373 9.62537 17.2475 9.5981 17.1321 9.54509C17.0168 9.49208 16.9143 9.4146 16.8319 9.31803C16.7495 9.22145 16.6891 9.1081 16.6549 8.98584C16.6206 8.86357 16.6134 8.73533 16.6337 8.61L16.66 8.51375L18.41 2.38875C18.4569 2.22307 18.5517 2.07491 18.6824 1.96285C18.8132 1.85078 18.9741 1.77978 19.145 1.75875L19.25 1.75H22.75ZM23.625 15.75H4.375V21.875C4.37445 22.294 4.52428 22.6994 4.79725 23.0173C5.07022 23.3352 5.4482 23.5446 5.8625 23.6075L5.99375 23.6162L6.125 23.625H21.875C22.3173 23.6262 22.7436 23.46 23.0683 23.1597C23.3929 22.8594 23.5918 22.4473 23.625 22.0063V15.75ZM9.625 11.375H7V14H9.625V11.375ZM22.085 3.5H19.9062L18.655 7.875H23.3363L22.085 3.5Z" fill="#00ACAB"/>
</svg>',
                        'txt' => 'Dedicated workspace',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                    <div>
                        <div class="uk-flex-middle uk-grid-12" uk-grid>
                            <div class="uk-width-auto">
                                <div class="accommodation__include__box uk-cover-container uk-border-rounded">
                                    <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                                        <?= $v['img'] ?>
                                    </div>
                                    <canvas width="40" height="40"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <div class="accommodation__include__txt"><?= $v['txt'] ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<div class="uk-section uk-section-muted">
    <div class="uk-container uk-padding-remove">
        <?php
        $num = 1;
        $data = array(
            array(
                'name' => 'One-Bedroom Ocean Pool Residence',
                'img' => 'https://s3-alpha-sig.figma.com/img/b810/b6e7/a3b10c3e2b1072b6bf351cb3db60a039?Expires=1710115200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=erz-CQpzAp4zldmc1hze3RsWx1JqPrXjH9DGTTw3qMy3m5QkJgcrj2ukDn8VS3azelLE93a8D-syUZs4QfLrngxNWeLx3LPZqZHJ6uU-ACMcnxcqv~hx3aNOhGNfndrkvAAjZiKTbosRJhr31YjbmwLY3AXKv5qDeR6-O6dQi13yQo0LkdOf1U9Ba54S~dz7je6DtwfKTkCJjl4doIe8tAqSe2g5d9MyLl6VouhoeEG6y5outBeTZgQzTWvZVubXjYS17CYusasnW2~yhEBa2SacxivjPuqyjsRMKSPKtFztlgd11SAmUysaRgncM6LyqQIo5EnFYG6SEbNp1lObbA__',
            ),
            array(
                'name' => 'Five-Bedroom Bay Pool Residence',
                'img' => 'https://s3-alpha-sig.figma.com/img/3ffc/0883/eb0a661bf907cae82823e9284610a15a?Expires=1710115200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=ZE4oHSurDfBst~FzYAI-EAIgILHoBqhcOUjbFgMuPZReheFWNunstdTNlVhjJZcFlcFwJVePaVtBDnAb62oLWJWxUQX4pMhZGVhg37mlaLAJPN0GkRXG1xen03EcniOqfBH76qKYkF0oMI2EXclh~xKrO~sfc2y~S2q0-0OoEwWzXMUZxmZLtqYVLJhAilHuW4stXxQHoYPukyn-gNwdJQHqOtpg1iZ6rOTAE-9DCjT0qJhPSGWMAHVBEBg2BCMIskWxXoH~0DuxJpr5S85rn8EhBEGCzf4c4e7xt4t1~98nuyoSfL4gas9J7Sra-0NZkcW9mbdw0Hl6gSIK2biq4Q__',
            ),
            array(
                'name' => 'Four-Bedroom Pool Residence',
                'img' => 'https://s3-alpha-sig.figma.com/img/4fc2/c5d2/3f6f4363843552cd31112bbbdc27cb5e?Expires=1710115200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=ozpPHLHQqObfB-w23HcgwE-FHXuPUCzuP8L6O3~eGRPziDpQ22J-ZtbbjrhdHL7xpjwEzAUT9O7oMFMKnU3VPpj~LJJ0z45BUwOi6bK0SnPJ8Ck024QxiiBDgD2yyGTr6LIAvGLOOTr8CLWV-yFZls0EI2pnUyKq0oyolFmKf3NdxMgWkGEhyEd7EGdL0uCeSL6zl70apsxH6hhGxh1NUgGCgoSae2bgOKoHcQKKenJMszhjzFW61J~nyY8PHRnKlbs1tIqhuZFP0AIv4DwRs8NGI~ZfGH4CkYFm2WsaRkTRr0dC198dzEqWwUH5vK7R6njcjB34RhsKjabVDWszSw__',
            ),
            array(
                'name' => 'Two-Bedroom Hill Top Pool Villa',
                'img' => 'https://s3-alpha-sig.figma.com/img/2cee/e9a3/e510946a6655f22c1a77cca87390a0bc?Expires=1710115200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=D6ms684q~OOuwTY~Fp4K2DtyE1sRaMLn2JRvz0bQvgBKg2rSbGlie~btfvyc03DyPvfRJ1uZEDd4DOmBxUqU2N6alX4~U5nd282jGCSey1zhvz4U2T~TOkFXLncZCe1kGnAyB5iWHE9-61fG6X13eQbm118Lhrm9S~glQ9TLhEKr~EBUQBZFvFvpMVQ~72It3vMn-aTC409RPgyGqflEKJEbYJfHzi0Vdhd1q9MMla4qUaj3sMrr5~7qn3CA4iS1bpRoeFcccnrfBtx~K4TmfXR3v7bWRmRp4NY0YoRdr94fT2FS8tRBGEGEdmc~Epu7J~sl8JEDjqYErpJsRK82mw__',
            ),
        );
        foreach ($data as $k=>$v): ?>
        <div class="accommodation__room__card uk-card item-44px uk-card-body uk-border-rounded uk-background-default">
            <div uk-grid>
                <div class="uk-width-auto@l <?= ($num%2==0) ? 'uk-flex-last@l' : '' ?>">
                    <div class="width-540px uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 540:442;autoplay: true;">

                        <ul class="uk-slideshow-items">
                            <li>
                                <img src="<?= $v['img'] ?>" alt="" uk-cover>
                            </li>
                            <li>
                                <img src="<?= get_theme_file_uri('/assets/images/photo.jpg') ?>" alt="" uk-cover>
                            </li>
                            <li>
                                <img src="<?= get_theme_file_uri('/assets/images/dark.jpg') ?>" alt="" uk-cover>
                            </li>
                            <li>
                                <img src="<?= get_theme_file_uri('/assets/images/light.jpg') ?>" alt="" uk-cover>
                            </li>
                        </ul>

                        <div class="uk-position-bottom-left">1/4</div>

                        <div class="uk-position-bottom-right">
                            <a class="" href uk-slidenav-previous uk-slideshow-item="previous"></a>
                            <a class="" href uk-slidenav-next uk-slideshow-item="next"></a>
                        </div>

                    </div>
                </div>
                <div class="uk-width-expand">
                    <h3><?= $v['name'] ?></h3>
                    <ul class="uk-list item-42px">
                        <li>Size: 98 sqm</li>
                        <li>Max guests: 2 adults and 2 children</li>
                        <li>View: Mountain/ Valley/ Rice Field</li>
                        <li>1 bedroom(s)</li>
                    </ul>
                    <div class="item-36px">
                        <ul class="uk-subnav uk-subnav-pill uk-grid-12" uk-switcher>
                            <li><a href="#">Description</a></li>
                            <li><a href="#">Key facts</a></li>
                            <li><a href="#">Facilities</a></li>
                        </ul>

                        <ul class="uk-switcher uk-margin">
                            <li>
                                <p>The Mountain Suite is airy and graceful with a king-size bed or twin bed, lounge with sofa, and a lot of sunlight during the day. The outdoor balcony features a range of seating options to relax in the  cool shade. The bathroom includes a shower and a large bathtub with a floor-to-ceiling window for a  one-in-a-life- time bathing experience...Read more</p>
                            </li>
                            <li>Hello again!</li>
                            <li>Bazinga!</li>
                        </ul>
                    </div>
                    <div class="item-40px">
                        <a href="" class="uk-button uk-button-default home__room__btn">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <?php $num++; endforeach; ?>
    </div>
</div>
<?php get_footer(); ?>