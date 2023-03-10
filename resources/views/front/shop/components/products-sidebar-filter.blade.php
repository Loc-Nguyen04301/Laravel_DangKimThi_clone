<form action="{{request()->segment(2) =='product' ?  'shop' : ' '}}">
    <div class="filter-widget">
        <h4 class="fw-title">Categories</h4>
        <ul class="filter-catagories">
            @foreach($categories as $category)
                <li><a href="shop/category/{{$category->name}}">{{$category->name}}</a></li>
            @endforeach
        </ul>
    </div>

    <div class="filter-widget">
        <div class="fw-title">Brand</div>
        <div class="fw-brand-check">
            @foreach($brands as $brand)
                <div class="bc-item">
                    <label for="bc-{{$brand->id}}">
                        {{$brand->name}}
                        <input type="checkbox"
                               {{(request("brand")[$brand->id] ?? '') == 'on' ? 'checked' :''}}
                               id="bc-{{$brand->id}}"
                               name="brand[{{$brand->id}}]"
                               onchange="this.form.submit()"
                        />
                        <span class="checkmark"></span>
                    </label>
                </div>
            @endforeach
        </div>
    </div>

    <div class="filter-widget">
        <div class="fw-title">Price</div>
        <div class="filter-range-wrap">
            <div class="range-slider">
                <div class="price-input">
                    <input type="text" id="minamount" name="price_min"/>
                    <input type="text" id="maxamount" name="price_max"/>
                </div>
            </div>
            <div
                class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget-content"
                data-min="10"
                data-max="1000"
                data-min-value="{{str_replace('$','',request('price_min'))}}"
                data-max-value="{{str_replace('$','',request('price_max'))}}"
            >
                <div
                    class="ui-slider--range ui-corner-all ui-widget-header "
                ></div>
                <span
                    tabindex="0"
                    class="ui-slider-handle ui-corner-all ui-state-default"
                ></span>
                <span
                    tabindex="0"
                    class="ui-slider-handle ui-corner-all ui-state-default"
                ></span>
            </div>
        </div>
        <button type="submit" class="filter-btn">Filter</button>
    </div>

    <div class="filter-widget">
        <h4 class="fw-title">Color</h4>

        <div class="fw-color-choose">
            <div class="cs-item">
                <input type="radio" id="cs-black" name="color" onchange="this.form.submit() "/>
                {{request('color') == 'black' ? 'checked' : ''}}
                <label class="cs-black"
                       for="cs-black" {{request('color') == 'black' ? 'font-weight-bold' : ''}}>black</label>
            </div>

            <div class="cs-item">
                <input type="radio" id="cs-violet" name="color" onchange="this.form.submit() "/>
                {{request('color') == 'violet' ? 'checked' : ''}}
                <label class="cs-violet"
                       for="cs-violet" {{request('color') == 'violet' ? 'font-weight-bold' : ''}}>violet</label>
            </div>

            <div class="cs-item">
                <input type="radio" id="cs-blue" name="color" onchange="this.form.submit() "/>
                {{request('color') == 'blue' ? 'checked' : ''}}
                <label class="cs-blue"
                       for="cs-blue" {{request('color') == 'blue' ? 'font-weight-bold' : ''}}>blue</label>
            </div>

            <div class="cs-item">
                <input type="radio" id="cs-yellow" name="color" onchange="this.form.submit() "/>
                {{request('color') == 'yellow' ? 'checked' : ''}}
                <label class="cs-yellow"
                       for="cs-yellow" {{request('color') == 'yellow' ? 'font-weight-bold' : ''}}>yellow</label>
            </div>

            <div class="cs-item">
                <input type="radio" id="cs-red" name="color" onchange="this.form.submit() "/>
                {{request('color') == 'red' ? 'checked' : ''}}
                <label class="cs-red"
                       for="cs-red" {{request('color') == 'red' ? 'font-weight-bold' : ''}}>red</label>
            </div>

            <div class="cs-item">
                <input type="radio" id="cs-green" name="color" onchange="this.form.submit()"/>
                {{request('color') == 'green' ? 'checked' : ''}}
                <label class="cs-green"
                       for="cs-green" {{request('color') == 'green' ? 'font-weight-bold' : ''}}>green</label>
            </div>
        </div>
    </div>

    <div class="filter-widget">
        <div class="fw-title">Size</div>
        <div class="fw-size-choose">
            <div class="sc-item">
                <input type="radio" id="s-size"/>
                <label for="s-size">s</label>
            </div>

            <div class="sc-item">
                <input type="radio" id="m-size"/>
                <label for="m-size">m</label>
            </div>

            <div class="sc-item">
                <input type="radio" id="l-size"/>
                <label for="l-size">l</label>
            </div>

            <div class="sc-item">
                <input type="radio" id="xs-size"/>
                <label for="xs-size">xs</label>
            </div>
        </div>
    </div>

    <div class="filter-widget">
        <h4 class="fw-title">Tags</h4>
        <div class="fw-tags">
            <a href="#">Tower</a>
            <a href="#">Shoes</a>
            <a href="#">Coat</a>
            <a href="#"></a>
            <a href="#">Dresses</a>
            <a href="#">Trouser</a>
            <a href="#">Men's hats</a>
            <a href="#">Backpack</a>
        </div>
    </div>
</form>
