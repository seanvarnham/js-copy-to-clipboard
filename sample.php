<div data-sticky="" class="<?php echo implode(" ", $classes) ?>">
    <div data-event="none">Share:</div>

    <div data-event="share" class="click-event__share email">
        <a tabindex="-1" href="mailto:?subject=<?php the_title(); ?>&amp;body=I thought you would be interested in this story from [SITE NAME GOES HERE]:%0D%0A%0D%0A<?php the_title(); ?>%0D%0A%0D%0A<?php the_permalink(get_the_ID()); ?>" class="single__widget-link">
            <svg role="img" aria-label="icon-email" viewBox="0 0 22 16" height="16" width="22" data-di-rand="1627123087331">
                <title>Share by email</title>
                <g fill-rule="nonzero" fill="currentColor">
                    <path d="M22,0 L22,16 L0,16 L0,0 L22,0 Z M13.5135,8 L20.2711667,2.23985068 L20.0346667,1.91880541 L11,9.20018665 L2.04233333,2.00093327 L1.80583333,2.32197853 L8.56533333,8.08026132 L1.80766667,13.8404106 L2.04233333,14.1595894 L9.0365,8.47970135 L11,10.1595894 L13.0423333,8.39944004 L20.0346667,14.079328 L20.2711667,13.7582828 L13.5135,8 Z"></path>
                </g>
            </svg>
        </a>
    </div>

    <div data-event="share" class="click-event__share twitter">
        <a tabindex="-1" href="https://twitter.com/intent/tweet?text=<?php echo get_the_permalink( $id ); ?>" target="_blank" class="single__widget-link">
            <svg role="img" aria-label="icon-twitter" viewBox="-354.2 -279.4 750 600" height="16" width="20" data-di-rand="1627123087331">
                <title>Share on Twitter</title>
                <path fill="currentColor" d="M391.3-210.7c-28.9,10.9-57.8,21.7-86.7,25.3c32.5-18.1,54.2-50.6,68.7-83.1c-28.9,18.1-61.5,28.9-97.6,36.1 c-28.9-28.9-68.7-47-112-47c-83.1,0-151.8,68.7-151.8,151.8c0,10.8,0,25.3,3.6,36.1c-126.5-7.3-238.6-68.7-314.5-159 c-14.5,21.7-21.7,50.6-21.7,75.9c0,54.2,25.3,101.2,68.7,126.5c-25.3,0-47-7.2-68.7-18.1c0,0,0,0,0,3.6 c0,72.3,54.2,137.4,122.9,148.2c-14.5,3.6-25.3,3.6-39.7,3.6c-10.9,0-18.1,0-28.9-3.6c18.1,61.5,75.9,104.8,141,104.8 c-50.6,39.8-119.3,65.1-188,65.1c-10.8,0-25.3,0-36.1-3.6c68.7,43.3,148.2,68.7,234.9,68.7C167.2,320.6,319,89.3,319-113.1 c0-7.2,0-14.4,0-18.1C344.3-152.9,369.6-181.8,391.3-210.7z"></path>
            </svg>
        </a>
    </div>

    <div data-event="share" class="click-event__share facebook">
        <a tabindex="-1" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink( $id ); ?>" target="_blank" class="single__widget-link">
            <svg role="img" aria-label="icon-facebook" viewBox="14 10 10.592460632324219 20.397258758544922" height="18" width="9" data-di-rand="1627123087331">
                <title>Share on Facebook</title>
                <g fill-rule="nonzero" fill="currentColor">
                    <path d="M20.8754687,30.3972581 L20.8754687,21.0930804 L23.9984274,21.0930804 L24.4660462,17.4670773 L20.8754687,17.4670773 L20.8754687,15.1521034 C20.8754687,14.1022918 21.1669846,13.3868799 22.6723889,13.3868799 L24.5924599,13.3860409 L24.5924599,10.1429146 C24.2603909,10.0987257 23.1206168,10 21.7945782,10 C19.0262491,10 17.1309761,11.6898042 17.1309761,14.7929991 L17.1309761,17.4670773 L14,17.4670773 L14,21.0930804 L17.1309761,21.0930804 L17.1309761,30.3972581 L20.8754687,30.3972581 Z"></path>
                </g>
            </svg>
        </a>
    </div>

    <div data-event="copy" class="click-event__copy sharer">
        <a tabindex="-1" data-url="<?php echo get_the_permalink( $id ); ?>" class="single__widget-link">
            <svg role="img" aria-label="icon-copy-link" viewBox="0 0 15 15" height="16" width="15" data-di-rand="1627123087331">
                <title>Copy link to clipboard</title>
                <path fill="currentColor" d="M13.936 1.12A3.532 3.532 0 0 0 11.36 0a3.53 3.53 0 0 0-2.575 1.119l-3.22 3.38c-1.42 1.49-1.42 3.914 0 5.405.229.24.49.43.763.596L7.71 9.052a1.793 1.793 0 0 1-.857-.5 1.924 1.924 0 0 1-.455-.827v-.002a1.984 1.984 0 0 1-.06-.324l-.001-.011a2.074 2.074 0 0 1-.005-.32l.002-.025c.009-.103.024-.206.048-.307.001-.009.005-.017.007-.026.08-.314.23-.614.464-.86l3.22-3.38a1.776 1.776 0 0 1 1.288-.558c.465 0 .932.187 1.287.559a1.98 1.98 0 0 1 0 2.703l-1.119 1.174c.03.082.05.167.075.25l.001.002a5.013 5.013 0 0 1 .216 1.702l-.007.082c-.008.134-.013.268-.032.402l2.154-2.26c1.42-1.491 1.42-3.917 0-5.406zM8.672 4.5l-1.38 1.45c.312.08.611.24.856.497.227.24.373.526.456.828v.003c.029.107.048.214.06.323v.011c.01.107.013.213.006.32l-.003.026a2.01 2.01 0 0 1-.047.307c-.002.01-.006.018-.008.026-.08.314-.23.613-.464.86l-3.22 3.378c-.356.374-.822.56-1.288.56-.465 0-.932-.186-1.287-.56a1.978 1.978 0 0 1 0-2.702l1.119-1.175c-.03-.082-.05-.167-.075-.25l-.02-.069A4.982 4.982 0 0 1 3.18 6.7c0-.029.004-.056.006-.083.008-.134.013-.268.032-.402l-2.154 2.26c-1.42 1.49-1.42 3.915 0 5.405A3.537 3.537 0 0 0 3.64 15c.973 0 1.887-.398 2.576-1.119l3.22-3.379c1.419-1.49 1.419-3.915 0-5.404a3.644 3.644 0 0 0-.764-.598z"></path>
            </svg>
            <span class="tooltip click-event__tooltip--success"><?php _e("Copied URL to clipboard", "textdomain"); ?></span>
        </a>
    </div>

</div>
