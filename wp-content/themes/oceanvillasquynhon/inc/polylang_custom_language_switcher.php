<?php // Don't copy this line in functions.php file if it's already added.

/**
 * Show Polylang Languages with Custom Markup
 * @param  string $class Add custom class to the languages container
 * @return string
 */
function rarus_polylang_languages( $class = '' ) {

    if ( ! function_exists( 'pll_the_languages' ) ) return;

    // Gets the pll_the_languages() raw code
    $languages = pll_the_languages( array(
        'display_names_as'       => 'slug',
        'hide_if_no_translation' => 1,
        'raw'                    => true
    ) );
    //var_dump($languages);

    $output = '';

    // Checks if the $languages is not empty
    if ( ! empty( $languages ) ) {

        // Creates the $output variable with languages container
        $output = '<div class="uk-navbar-item"><div class="languages uk-grid uk-grid-5 uk-flex-right uk-flex-left@m' . ( $class ? ' ' . $class : '' ) . '">';

        // Runs the loop through all languages
        foreach ( $languages as $language ) {

            // Variables containing language data
            $id             = $language['id'];
            $slug           = $language['slug'];
            $url            = $language['url'];
            $flag           = $language['flag'];
            $current        = $language['current_lang'] ? ' languages__item--current' : '';
            $no_translation = $language['no_translation'];

            // Checks if the page has translation in this language
            if ( ! $no_translation ) {
                // Check if it's current language
                if ( $current ) {
                    // Output the language in a <span> tag so it's not clickable
                    $output .= "<span class=\"languages__item$current\"><img src=\"$flag\" alt=''></span>";
                } else {
                    // Output the language in an anchor tag
                    $output .= "<a href=\"$url\" class=\"languages__item$current\"><img src=\"$flag\" alt=''></a>";
                }
            }

        }

        $output .= '</div></div>';

    }

    return $output;
}

function wuling_polylang_languages( $class = '' ) {

    if ( ! function_exists( 'pll_the_languages' ) ) return;

    // Gets the pll_the_languages() raw code
    $languages = pll_the_languages( array(
        'display_names_as'       => 'slug',
        'hide_if_no_translation' => 1,
        'raw'                    => true
    ) );
    //var_dump($languages);

    $output = '';

    // Checks if the $languages is not empty
    if ( ! empty( $languages ) ) {

        // Creates the $output variable with languages container
        $output = '<div class="polylang__box">';

        // Runs the loop through all languages
        foreach ( $languages as $language ) {

            // Variables containing language data
            //$id             = $language['id'];
            //$slug           = ($language['slug'] == 'vi') ? 'vie' : 'eng';
            $slug           = $language['slug'];
            $url            = $language['url'];
            $flag           = $language['flag'];
            $current        = $language['current_lang'] ? ' languages__item--current' : '';
            $no_translation = $language['no_translation'];

            // Checks if the page has translation in this language
            if ( ! $no_translation ) {
                // Check if it's current language
                if ( $current ) {
                    // Output the language in a <span> tag so it's not clickable
                    $output .= "<span>$slug</span>";
                } else {
                    // Output the language in an anchor tag
                    $output .= "<a href=\"$url\">$slug</a>";
                }
            }

        }

        $output .= '</div>';

    }

    return $output;
}

function dropdown_polylang_languages( $class = '' ) {

    if ( ! function_exists( 'pll_the_languages' ) ) return;

    // Gets the pll_the_languages() raw code
    $languages = pll_the_languages( array(
        'display_names_as'       => 'name',
        'hide_if_no_translation' => 1,
        'raw'                    => true
    ) );
    //var_dump($languages);

    $output = '';

    // Checks if the $languages is not empty
    if ( ! empty( $languages ) ) {

        // Creates the $output variable with languages container
        //$output = '';

        // Runs the loop through all languages
        foreach ( $languages as $language ) {

            //$id             = $language['id'];
            //$slug           = $language['slug'];
            $name           = $language['name'];
            //$url            = $language['url'];
            $flag           = $language['flag'];
            $current        = $language['current_lang'] ? ' languages__item--current' : '';
            $no_translation = $language['no_translation'];

            if ( ! $no_translation ) {
                if ( $current ) {
                    $output .= "<button style='background-color: #fff !important; color: #333 !important;' class=\"uk-button uk-border-pill uk-button-default uk-background-default\" type=\"button\"><img src=\"$flag\" alt=\"$name\"> $name <span uk-drop-parent-icon></span></button>";
                }
            }

        }
        $output .= '<div uk-dropdown><ul class="uk-nav uk-dropdown-nav">';
        foreach ( $languages as $language ) {

            //$id             = $language['id'];
            //$slug           = $language['slug'];
            $name           = $language['name'];
            $url            = $language['url'];
            $flag           = $language['flag'];
            $current        = $language['current_lang'] ? ' languages__item--current' : '';
            $no_translation = $language['no_translation'];

            if ( ! $no_translation ) {
                if ( !$current ) {
                    $output .= "<li><a href=\"$url\"><img src=\"$flag\" alt=\"$name\"> $name</a></li>";
                }
            }

        }

        $output .= '</ul></div>';

    }

    return $output;
}