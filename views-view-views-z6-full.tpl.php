<?php

/**
 * @file
 * Default view template to display content using views_z6_full layout_type
 */
?>

<?php
$layout_type = $options['layout_type'];

switch ($layout_type) {
    case "padding_container":
        print '<div class="small-collapse medium-collapse large-collapse l-secondary" role="region">';
            if (!empty($title)) {
                print "<h3>$title</h3>";
            }
            foreach ($rows as $id => $row) {
                if ($row_classes[$id]) {
                    print '<div class="small-12 column l-secondary-inner ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
                }
            }
        print '</div>';
    break;

    case "full_width_container":
        print '<div class="row small-collapse medium-collapse large-collapse l-secondary" role="region">';
            if (!empty($title)) {
                print "<h3>$title</h3>";
            }
            foreach ($rows as $id => $row) {
                if ($row_classes[$id]) {
                    print '<div class="small-12 column l-secondary-inner ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
                }
            }
        print '</div>';
    break;

    case "halfs_container":
        print '<section class="row expanded align-center l-halves" role="region">';
            if (!empty($title)) {
                print "<h3>$title</h3>";
            }
              foreach ($rows as $id => $row) {
                if ($row_classes[$id]) {
                    print '<div class="small-12 medium-6 l-halves-region ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
                }
            }
        print '</div>';
    break;


    case "thirds_container":
        print '<section class="row expanded align-center l-thirds" role="region">';
            if (!empty($title)) {
                print "<h3>$title</h3>";
            }
              foreach ($rows as $id => $row) {
                if ($row_classes[$id]) {
                    print '<div class="small-12 medium-4 l-thirds-region ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
                }
            }
        print '</div>';
    break;

    case "quarters_container":
        print '<section class="row expanded align-center l-quarters" role="region">';
            if (!empty($title)) {
                print "<h3>$title</h3>";
            }
              foreach ($rows as $id => $row) {
                if ($row_classes[$id]) {
                    print '<div class="small-12 medium-3 l-quarters-region ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
                }
            }
        print '</div>';
    break;
}

?>
