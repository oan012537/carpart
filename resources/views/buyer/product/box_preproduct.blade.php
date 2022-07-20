@php
    $product_name = $link_product_name;
    $link_product_name = str_replace(' ', '-', $product_name);
    $link_url = 'product/'.$link_product_name;
@endphp

<div class="col-xl-3 col-lg-6 col-6">
    <a href="{{ url($link_url, $link_id) }}">
        <div class="box__itemssproductintro">
            <div class="box__image">
                <img src="assets/img/home/product-intro{{ ++$key }}.png"
                    class="img-fluid" alt="">

                <div class="box__status">
                    <p>Promotion</p>
                </div>

                <div class="box__grade">
                    <p>Grade</p>
                </div>
            </div>

            <div class="box__content">
                <h5 class="intro__title" style="height: 4.5rem; overflow:hide;">{{ (is_null($product_name) ? '-' : $product_name) }}</h5>
                <p class="intro__serial">รหัส: 90915-YZZE1 - TOYOTA </p>
                <p class="intro__price">฿ <span>{{ number_format($link_price,2) }}</span> /ชิ้น</p>
            </div>
        </div>
    </a>
</div>