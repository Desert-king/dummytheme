<div class="block-split__item block-split__item-sidebar col-auto">
    <div class="sidebar sidebar--offcanvas--mobile">
        <div class="sidebar__backdrop"></div>
        <div class="sidebar__body">
            <div class="sidebar__header">
                <div class="sidebar__title">Filters</div>
                <button class="sidebar__close" type="button">
                    <svg width="12" height="12">
                        <path
                            d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
C11.2,9.8,11.2,10.4,10.8,10.8z"
                        />
                    </svg>
                </button>
            </div>
            <div class="sidebar__content">
                <div class="widget widget-filters widget-filters--offcanvas--mobile" data-collapse data-collapse-opened-class="filter--opened">
                    <div class="widget__header widget-filters__header"><h4>Filters</h4></div>
                    <div class="widget-filters__list">
                        <div class="widget-filters__item">
                            <div class="filter filter--opened" data-collapse-item>
                                <button type="button" class="filter__title" data-collapse-trigger>
                                    Categories
                                    <span class="filter__arrow">
                                        <svg width="12px" height="7px">
                                            <path
                                                d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"
                                            />
                                        </svg>
                                    </span>
                                </button>
                                <div class="filter__body" data-collapse-content>
                                    <div class="filter__container">
                                        <div class="filter-categories">
                                            <ul class="filter-categories__list">
                                                <?php
                                                        wp_nav_menu(    
                                                            array(
                                                                'theme_location' => 'category-of-Products',
                                                                'container' => '',
                                                                'menu_class' => '',
                                                                // 'items_wrap' => '<ul  id="detail-page-menu" class="main-menu__list">%3$s</ul>',
                                                                // 'add_li_class'  => 'main-menu__item main-menu__item--submenu--menu main-menu__item--has-submenu',
                                                                'depth' => '2',
                                                            )

                                                        );
                                                ?>
                                                <!-- <li class="filter-categories__item filter-categories__item--parent">
                                                    <span class="filter-categories__arrow">
                                                        <svg width="6" height="9">
                                                            <path
                                                                d="M5.7,8.7L5.7,8.7c-0.4,0.4-0.9,0.4-1.3,0L0,4.5l4.4-4.2c0.4-0.4,0.9-0.3,1.3,0l0,0c0.4,0.4,0.4,1,0,1.3l-3,2.9l3,2.9
C6.1,7.8,6.1,8.4,5.7,8.7z"
                                                            />
                                                        </svg>
                                                    </span>
                                                    <a href="#">Construction & Repair</a>
                                                    <div class="filter-categories__counter">254</div>
                                                </li>
                                                <li class="filter-categories__item filter-categories__item--parent">
                                                    <span class="filter-categories__arrow">
                                                        <svg width="6" height="9">
                                                            <path
                                                                d="M5.7,8.7L5.7,8.7c-0.4,0.4-0.9,0.4-1.3,0L0,4.5l4.4-4.2c0.4-0.4,0.9-0.3,1.3,0l0,0c0.4,0.4,0.4,1,0,1.3l-3,2.9l3,2.9
C6.1,7.8,6.1,8.4,5.7,8.7z"
                                                            />
                                                        </svg>
                                                    </span>
                                                    <a href="#">Instruments</a>
                                                    <div class="filter-categories__counter">75</div>
                                                </li>
                                                <li class="filter-categories__item filter-categories__item--current">
                                                    <a href="#">Power Tools</a>
                                                    <div class="filter-categories__counter">21</div>
                                                </li>
                                                <li class="filter-categories__item filter-categories__item--child">
                                                    <a href="#">Drills & Mixers</a>
                                                    <div class="filter-categories__counter">15</div>
                                                </li>
                                                <li class="filter-categories__item filter-categories__item--child">
                                                    <a href="#">Cordless Screwdrivers</a>
                                                    <div class="filter-categories__counter">2</div>
                                                </li>
                                                <li class="filter-categories__item filter-categories__item--child">
                                                    <a href="#">Screwdrivers</a>
                                                    <div class="filter-categories__counter">30</div>
                                                </li>
                                                <li class="filter-categories__item filter-categories__item--child">
                                                    <a href="#">Wrenches</a>
                                                    <div class="filter-categories__counter">7</div>
                                                </li>
                                                <li class="filter-categories__item filter-categories__item--child">
                                                    <a href="#">Grinding Machines</a>
                                                    <div class="filter-categories__counter">5</div>
                                                </li>
                                                <li class="filter-categories__item filter-categories__item--child">
                                                    <a href="#">Milling Cutters</a>
                                                    <div class="filter-categories__counter">2</div>
                                                </li>
                                                <li class="filter-categories__item filter-categories__item--child">
                                                    <a href="#">Electric Spray Guns</a>
                                                    <div class="filter-categories__counter">9</div>
                                                </li>
                                                <li class="filter-categories__item filter-categories__item--child">
                                                    <a href="#">Jigsaws</a>
                                                    <div class="filter-categories__counter">4</div>
                                                </li>
                                                <li class="filter-categories__item filter-categories__item--child">
                                                    <a href="#">Jackhammers</a>
                                                    <div class="filter-categories__counter">0</div>
                                                </li>
                                                <li class="filter-categories__item filter-categories__item--child">
                                                    <a href="#">Planers</a>
                                                    <div class="filter-categories__counter">12</div>
                                                </li>
                                                <li class="filter-categories__item filter-categories__item--child">
                                                    <a href="#">Glue Guns</a>
                                                    <div class="filter-categories__counter">7</div>
                                                </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 11111111111111111111 -->
                        <?php 
                               

                        ?>
                        <!-- 11111111111111111111111 -->
                        <div class="widget-filters__item">
                            <div class="filter filter--opened" data-collapse-item>
                                <button type="button" class="filter__title" data-collapse-trigger>
                                    Vehicle
                                    <span class="filter__arrow">
                                        <svg width="12px" height="7px">
                                            <path
                                                d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"
                                            />
                                        </svg>
                                    </span>
                                </button>
                                <div class="filter__body" data-collapse-content>
                                    <div class="filter__container">
                                        <div class="filter-vehicle">
                                            <ul class="filter-vehicle__list">
                                                <li class="filter-vehicle__item">
                                                    <label class="filter-vehicle__item-label">
                                                        <span class="filter-list__input input-radio">
                                                            <span class="input-radio__body">
                                                                <input class="input-radio__input" name="filter_vehicle" type="radio" /> <span class="input-radio__circle"></span>
                                                            </span>
                                                        </span>
                                                        <span class="filter-vehicle__item-title">All Parts </span><span class="filter-vehicle__item-counter">57</span>
                                                    </label>
                                                </li>
                                                <li class="filter-vehicle__item">
                                                    <label class="filter-vehicle__item-label">
                                                        <span class="filter-list__input input-radio">
                                                            <span class="input-radio__body">
                                                                <input class="input-radio__input" name="filter_vehicle" type="radio" checked="checked" /> <span class="input-radio__circle"></span>
                                                            </span>
                                                        </span>
                                                        <span class="filter-vehicle__item-title">2011 Ford Focus S </span><span class="filter-vehicle__item-counter">12</span>
                                                    </label>
                                                </li>
                                                <li class="filter-vehicle__item">
                                                    <label class="filter-vehicle__item-label">
                                                        <span class="filter-list__input input-radio">
                                                            <span class="input-radio__body">
                                                                <input class="input-radio__input" name="filter_vehicle" type="radio" /> <span class="input-radio__circle"></span>
                                                            </span>
                                                        </span>
                                                        <span class="filter-vehicle__item-title">2015 Audi A3 </span><span class="filter-vehicle__item-counter">51</span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <div class="filter-vehicle__button"><button type="button" class="btn btn-xs btn-secondary">Add Vehicle</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-filters__item">
                            <div class="filter filter--opened" data-collapse-item>
                                <button type="button" class="filter__title" data-collapse-trigger>
                                    Price
                                    <span class="filter__arrow">
                                        <svg width="12px" height="7px">
                                            <path
                                                d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"
                                            />
                                        </svg>
                                    </span>
                                </button>
                                <div class="filter__body" data-collapse-content>
                                    <div class="filter__container">
                                        <div class="filter-price" data-min="500" data-max="1500" data-from="590" data-to="1000">
                                            <div class="filter-price__slider"></div>
                                            <div class="filter-price__title-button">
                                                <div class="filter-price__title">$<span class="filter-price__min-value"></span> – $<span class="filter-price__max-value"></span></div>
                                                <button type="button" class="btn btn-xs btn-secondary filter-price__button">Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-filters__item">
                            <div class="filter filter--opened" data-collapse-item>
                                <button type="button" class="filter__title" data-collapse-trigger>
                                    Brand
                                    <span class="filter__arrow">
                                        <svg width="12px" height="7px">
                                            <path
                                                d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"
                                            />
                                        </svg>
                                    </span>
                                </button>
                                <div class="filter__body" data-collapse-content>
                                    <div class="filter__container">
                                        <div class="filter-list">
                                            <div class="filter-list__list">
                                                <label class="filter-list__item">
                                                    <span class="input-check filter-list__input">
                                                        <span class="input-check__body">
                                                            <input class="input-check__input" type="checkbox" /> <span class="input-check__box"></span>
                                                            <span class="input-check__icon">
                                                                <svg width="9px" height="7px"><path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" /></svg>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="filter-list__title">Wakita </span><span class="filter-list__counter">7</span>
                                                </label>
                                                <label class="filter-list__item">
                                                    <span class="input-check filter-list__input">
                                                        <span class="input-check__body">
                                                            <input class="input-check__input" type="checkbox" checked="checked" /> <span class="input-check__box"></span>
                                                            <span class="input-check__icon">
                                                                <svg width="9px" height="7px"><path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" /></svg>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="filter-list__title">Zosch </span><span class="filter-list__counter">42</span>
                                                </label>
                                                <label class="filter-list__item filter-list__item--disabled">
                                                    <span class="input-check filter-list__input">
                                                        <span class="input-check__body">
                                                            <input class="input-check__input" type="checkbox" checked="checked" disabled="disabled" /> <span class="input-check__box"></span>
                                                            <span class="input-check__icon">
                                                                <svg width="9px" height="7px"><path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" /></svg>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="filter-list__title">WeVALT</span>
                                                </label>
                                                <label class="filter-list__item filter-list__item--disabled">
                                                    <span class="input-check filter-list__input">
                                                        <span class="input-check__body">
                                                            <input class="input-check__input" type="checkbox" disabled="disabled" /> <span class="input-check__box"></span>
                                                            <span class="input-check__icon">
                                                                <svg width="9px" height="7px"><path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" /></svg>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="filter-list__title">Hammer</span>
                                                </label>
                                                <label class="filter-list__item">
                                                    <span class="input-check filter-list__input">
                                                        <span class="input-check__body">
                                                            <input class="input-check__input" type="checkbox" /> <span class="input-check__box"></span>
                                                            <span class="input-check__icon">
                                                                <svg width="9px" height="7px"><path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" /></svg>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="filter-list__title">Mitasia </span><span class="filter-list__counter">1</span>
                                                </label>
                                                <label class="filter-list__item">
                                                    <span class="input-check filter-list__input">
                                                        <span class="input-check__body">
                                                            <input class="input-check__input" type="checkbox" /> <span class="input-check__box"></span>
                                                            <span class="input-check__icon">
                                                                <svg width="9px" height="7px"><path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" /></svg>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="filter-list__title">Metaggo </span><span class="filter-list__counter">25</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-filters__item">
                            <div class="filter filter--opened" data-collapse-item>
                                <button type="button" class="filter__title" data-collapse-trigger>
                                    Brand
                                    <span class="filter__arrow">
                                        <svg width="12px" height="7px">
                                            <path
                                                d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"
                                            />
                                        </svg>
                                    </span>
                                </button>
                                <div class="filter__body" data-collapse-content>
                                    <div class="filter__container">
                                        <div class="filter-list">
                                            <div class="filter-list__list">
                                                <label class="filter-list__item">
                                                    <span class="filter-list__input input-radio">
                                                        <span class="input-radio__body"><input class="input-radio__input" name="filter_radio" type="radio" /> <span class="input-radio__circle"></span> </span>
                                                    </span>
                                                    <span class="filter-list__title">Wakita </span><span class="filter-list__counter">7</span>
                                                </label>
                                                <label class="filter-list__item">
                                                    <span class="filter-list__input input-radio">
                                                        <span class="input-radio__body"><input class="input-radio__input" name="filter_radio" type="radio" /> <span class="input-radio__circle"></span> </span>
                                                    </span>
                                                    <span class="filter-list__title">Zosch </span><span class="filter-list__counter">42</span>
                                                </label>
                                                <label class="filter-list__item filter-list__item--disabled">
                                                    <span class="filter-list__input input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input" name="filter_radio" type="radio" checked="checked" disabled="disabled" /> <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                                    <span class="filter-list__title">WeVALT</span>
                                                </label>
                                                <label class="filter-list__item filter-list__item--disabled">
                                                    <span class="filter-list__input input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input" name="filter_radio" type="radio" disabled="disabled" /> <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                                    <span class="filter-list__title">Hammer</span>
                                                </label>
                                                <label class="filter-list__item">
                                                    <span class="filter-list__input input-radio">
                                                        <span class="input-radio__body"><input class="input-radio__input" name="filter_radio" type="radio" /> <span class="input-radio__circle"></span> </span>
                                                    </span>
                                                    <span class="filter-list__title">Mitasia </span><span class="filter-list__counter">1</span>
                                                </label>
                                                <label class="filter-list__item">
                                                    <span class="filter-list__input input-radio">
                                                        <span class="input-radio__body"><input class="input-radio__input" name="filter_radio" type="radio" /> <span class="input-radio__circle"></span> </span>
                                                    </span>
                                                    <span class="filter-list__title">Metaggo </span><span class="filter-list__counter">25</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-filters__item">
                            <div class="filter filter--opened" data-collapse-item>
                                <button type="button" class="filter__title" data-collapse-trigger>
                                    Rating
                                    <span class="filter__arrow">
                                        <svg width="12px" height="7px">
                                            <path
                                                d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"
                                            />
                                        </svg>
                                    </span>
                                </button>
                                <div class="filter__body" data-collapse-content>
                                    <div class="filter__container">
                                        <div class="filter-rating">
                                            <ul class="filter-rating__list">
                                                <li class="filter-rating__item">
                                                    <label class="filter-rating__item-label">
                                                        <span class="input-check filter-rating__item-input">
                                                            <span class="input-check__body">
                                                                <input class="input-check__input" type="checkbox" /> <span class="input-check__box"></span>
                                                                <span class="input-check__icon">
                                                                    <svg width="9px" height="7px"><path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" /></svg>
                                                                </span>
                                                            </span>
                                                        </span>
                                                        <span class="filter-rating__item-stars">
                                                            <div class="rating">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                </div>
                                                            </div>
                                                        </span>
                                                        <span class="filter-rating__item-title sr-only">5 stars </span><span class="filter-rating__item-counter">42</span>
                                                    </label>
                                                </li>
                                                <li class="filter-rating__item">
                                                    <label class="filter-rating__item-label">
                                                        <span class="input-check filter-rating__item-input">
                                                            <span class="input-check__body">
                                                                <input class="input-check__input" type="checkbox" /> <span class="input-check__box"></span>
                                                                <span class="input-check__icon">
                                                                    <svg width="9px" height="7px"><path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" /></svg>
                                                                </span>
                                                            </span>
                                                        </span>
                                                        <span class="filter-rating__item-stars">
                                                            <div class="rating">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                        </span>
                                                        <span class="filter-rating__item-title sr-only">4 stars </span><span class="filter-rating__item-counter">24</span>
                                                    </label>
                                                </li>
                                                <li class="filter-rating__item">
                                                    <label class="filter-rating__item-label">
                                                        <span class="input-check filter-rating__item-input">
                                                            <span class="input-check__body">
                                                                <input class="input-check__input" type="checkbox" /> <span class="input-check__box"></span>
                                                                <span class="input-check__icon">
                                                                    <svg width="9px" height="7px"><path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" /></svg>
                                                                </span>
                                                            </span>
                                                        </span>
                                                        <span class="filter-rating__item-stars">
                                                            <div class="rating">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                        </span>
                                                        <span class="filter-rating__item-title sr-only">3 stars </span><span class="filter-rating__item-counter">19</span>
                                                    </label>
                                                </li>
                                                <li class="filter-rating__item">
                                                    <label class="filter-rating__item-label">
                                                        <span class="input-check filter-rating__item-input">
                                                            <span class="input-check__body">
                                                                <input class="input-check__input" type="checkbox" /> <span class="input-check__box"></span>
                                                                <span class="input-check__icon">
                                                                    <svg width="9px" height="7px"><path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" /></svg>
                                                                </span>
                                                            </span>
                                                        </span>
                                                        <span class="filter-rating__item-stars">
                                                            <div class="rating">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                        </span>
                                                        <span class="filter-rating__item-title sr-only">2 stars </span><span class="filter-rating__item-counter">3</span>
                                                    </label>
                                                </li>
                                                <li class="filter-rating__item">
                                                    <label class="filter-rating__item-label">
                                                        <span class="input-check filter-rating__item-input">
                                                            <span class="input-check__body">
                                                                <input class="input-check__input" type="checkbox" /> <span class="input-check__box"></span>
                                                                <span class="input-check__icon">
                                                                    <svg width="9px" height="7px"><path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" /></svg>
                                                                </span>
                                                            </span>
                                                        </span>
                                                        <span class="filter-rating__item-stars">
                                                            <div class="rating">
                                                                <div class="rating__body">
                                                                    <div class="rating__star rating__star--active"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                    <div class="rating__star"></div>
                                                                </div>
                                                            </div>
                                                        </span>
                                                        <span class="filter-rating__item-title sr-only">1 star </span><span class="filter-rating__item-counter">12</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-filters__item">
                            <div class="filter filter--opened" data-collapse-item>
                                <button type="button" class="filter__title" data-collapse-trigger>
                                    Color
                                    <span class="filter__arrow">
                                        <svg width="12px" height="7px">
                                            <path
                                                d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"
                                            />
                                        </svg>
                                    </span>
                                </button>
                                <div class="filter__body" data-collapse-content>
                                    <div class="filter__container">
                                        <div class="filter-color">
                                            <div class="filter-color__list">
                                                <label class="filter-color__item">
                                                    <span class="filter-color__check input-check-color input-check-color--white" style="color: #fff;">
                                                        <label class="input-check-color__body">
                                                            <input class="input-check-color__input" type="checkbox" /> <span class="input-check-color__box"></span>
                                                            <span class="input-check-color__icon">
                                                                <svg width="12px" height="9px"><path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" /></svg>
                                                            </span>
                                                            <span class="input-check-color__stick"></span>
                                                        </label>
                                                    </span>
                                                </label>
                                                <label class="filter-color__item">
                                                    <span class="filter-color__check input-check-color input-check-color--light" style="color: #d9d9d9;">
                                                        <label class="input-check-color__body">
                                                            <input class="input-check-color__input" type="checkbox" /> <span class="input-check-color__box"></span>
                                                            <span class="input-check-color__icon">
                                                                <svg width="12px" height="9px"><path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" /></svg>
                                                            </span>
                                                            <span class="input-check-color__stick"></span>
                                                        </label>
                                                    </span>
                                                </label>
                                                <label class="filter-color__item">
                                                    <span class="filter-color__check input-check-color" style="color: #b3b3b3;">
                                                        <label class="input-check-color__body">
                                                            <input class="input-check-color__input" type="checkbox" /> <span class="input-check-color__box"></span>
                                                            <span class="input-check-color__icon">
                                                                <svg width="12px" height="9px"><path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" /></svg>
                                                            </span>
                                                            <span class="input-check-color__stick"></span>
                                                        </label>
                                                    </span>
                                                </label>
                                                <label class="filter-color__item">
                                                    <span class="filter-color__check input-check-color" style="color: #808080;">
                                                        <label class="input-check-color__body">
                                                            <input class="input-check-color__input" type="checkbox" /> <span class="input-check-color__box"></span>
                                                            <span class="input-check-color__icon">
                                                                <svg width="12px" height="9px"><path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" /></svg>
                                                            </span>
                                                            <span class="input-check-color__stick"></span>
                                                        </label>
                                                    </span>
                                                </label>
                                                <label class="filter-color__item">
                                                    <span class="filter-color__check input-check-color" style="color: #666;">
                                                        <label class="input-check-color__body">
                                                            <input class="input-check-color__input" type="checkbox" /> <span class="input-check-color__box"></span>
                                                            <span class="input-check-color__icon">
                                                                <svg width="12px" height="9px"><path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" /></svg>
                                                            </span>
                                                            <span class="input-check-color__stick"></span>
                                                        </label>
                                                    </span>
                                                </label>
                                                <label class="filter-color__item">
                                                    <span class="filter-color__check input-check-color" style="color: #4d4d4d;">
                                                        <label class="input-check-color__body">
                                                            <input class="input-check-color__input" type="checkbox" /> <span class="input-check-color__box"></span>
                                                            <span class="input-check-color__icon">
                                                                <svg width="12px" height="9px"><path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" /></svg>
                                                            </span>
                                                            <span class="input-check-color__stick"></span>
                                                        </label>
                                                    </span>
                                                </label>
                                                <label class="filter-color__item">
                                                    <span class="filter-color__check input-check-color" style="color: #262626;">
                                                        <label class="input-check-color__body">
                                                            <input class="input-check-color__input" type="checkbox" /> <span class="input-check-color__box"></span>
                                                            <span class="input-check-color__icon">
                                                                <svg width="12px" height="9px"><path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" /></svg>
                                                            </span>
                                                            <span class="input-check-color__stick"></span>
                                                        </label>
                                                    </span>
                                                </label>
                                                <label class="filter-color__item">
                                                    <span class="filter-color__check input-check-color" style="color: #ff4040;">
                                                        <label class="input-check-color__body">
                                                            <input class="input-check-color__input" type="checkbox" checked="checked" /> <span class="input-check-color__box"></span>
                                                            <span class="input-check-color__icon">
                                                                <svg width="12px" height="9px"><path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" /></svg>
                                                            </span>
                                                            <span class="input-check-color__stick"></span>
                                                        </label>
                                                    </span>
                                                </label>
                                                <label class="filter-color__item">
                                                    <span class="filter-color__check input-check-color" style="color: #ff8126;">
                                                        <label class="input-check-color__body">
                                                            <input class="input-check-color__input" type="checkbox" /> <span class="input-check-color__box"></span>
                                                            <span class="input-check-color__icon">
                                                                <svg width="12px" height="9px"><path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" /></svg>
                                                            </span>
                                                            <span class="input-check-color__stick"></span>
                                                        </label>
                                                    </span>
                                                </label>
                                                <label class="filter-color__item">
                                                    <span class="filter-color__check input-check-color input-check-color--light" style="color: #ffd440;">
                                                        <label class="input-check-color__body">
                                                            <input class="input-check-color__input" type="checkbox" /> <span class="input-check-color__box"></span>
                                                            <span class="input-check-color__icon">
                                                                <svg width="12px" height="9px"><path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" /></svg>
                                                            </span>
                                                            <span class="input-check-color__stick"></span>
                                                        </label>
                                                    </span>
                                                </label>
                                                <label class="filter-color__item">
                                                    <span class="filter-color__check input-check-color input-check-color--light" style="color: #becc1f;">
                                                        <label class="input-check-color__body">
                                                            <input class="input-check-color__input" type="checkbox" /> <span class="input-check-color__box"></span>
                                                            <span class="input-check-color__icon">
                                                                <svg width="12px" height="9px"><path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" /></svg>
                                                            </span>
                                                            <span class="input-check-color__stick"></span>
                                                        </label>
                                                    </span>
                                                </label>
                                                <label class="filter-color__item">
                                                    <span class="filter-color__check input-check-color" style="color: #8fcc14;">
                                                        <label class="input-check-color__body">
                                                            <input class="input-check-color__input" type="checkbox" checked="checked" /> <span class="input-check-color__box"></span>
                                                            <span class="input-check-color__icon">
                                                                <svg width="12px" height="9px"><path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" /></svg>
                                                            </span>
                                                            <span class="input-check-color__stick"></span>
                                                        </label>
                                                    </span>
                                                </label>
                                                <label class="filter-color__item">
                                                    <span class="filter-color__check input-check-color" style="color: #47cc5e;">
                                                        <label class="input-check-color__body">
                                                            <input class="input-check-color__input" type="checkbox" /> <span class="input-check-color__box"></span>
                                                            <span class="input-check-color__icon">
                                                                <svg width="12px" height="9px"><path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" /></svg>
                                                            </span>
                                                            <span class="input-check-color__stick"></span>
                                                        </label>
                                                    </span>
                                                </label>
                                                <label class="filter-color__item">
                                                    <span class="filter-color__check input-check-color" style="color: #47cca0;">
                                                        <label class="input-check-color__body">
                                                            <input class="input-check-color__input" type="checkbox" /> <span class="input-check-color__box"></span>
                                                            <span class="input-check-color__icon">
                                                                <svg width="12px" height="9px"><path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" /></svg>
                                                            </span>
                                                            <span class="input-check-color__stick"></span>
                                                        </label>
                                                    </span>
                                                </label>
                                                <label class="filter-color__item">
                                                    <span class="filter-color__check input-check-color" style="color: #47cccc;">
                                                        <label class="input-check-color__body">
                                                            <input class="input-check-color__input" type="checkbox" /> <span class="input-check-color__box"></span>
                                                            <span class="input-check-color__icon">
                                                                <svg width="12px" height="9px"><path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" /></svg>
                                                            </span>
                                                            <span class="input-check-color__stick"></span>
                                                        </label>
                                                    </span>
                                                </label>
                                                <label class="filter-color__item">
                                                    <span class="filter-color__check input-check-color" style="color: #40bfff;">
                                                        <label class="input-check-color__body">
                                                            <input class="input-check-color__input" type="checkbox" disabled="disabled" /> <span class="input-check-color__box"></span>
                                                            <span class="input-check-color__icon">
                                                                <svg width="12px" height="9px"><path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" /></svg>
                                                            </span>
                                                            <span class="input-check-color__stick"></span>
                                                        </label>
                                                    </span>
                                                </label>
                                                <label class="filter-color__item">
                                                    <span class="filter-color__check input-check-color" style="color: #3d6dcc;">
                                                        <label class="input-check-color__body">
                                                            <input class="input-check-color__input" type="checkbox" checked="checked" /> <span class="input-check-color__box"></span>
                                                            <span class="input-check-color__icon">
                                                                <svg width="12px" height="9px"><path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" /></svg>
                                                            </span>
                                                            <span class="input-check-color__stick"></span>
                                                        </label>
                                                    </span>
                                                </label>
                                                <label class="filter-color__item">
                                                    <span class="filter-color__check input-check-color" style="color: #7766cc;">
                                                        <label class="input-check-color__body">
                                                            <input class="input-check-color__input" type="checkbox" /> <span class="input-check-color__box"></span>
                                                            <span class="input-check-color__icon">
                                                                <svg width="12px" height="9px"><path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" /></svg>
                                                            </span>
                                                            <span class="input-check-color__stick"></span>
                                                        </label>
                                                    </span>
                                                </label>
                                                <label class="filter-color__item">
                                                    <span class="filter-color__check input-check-color" style="color: #b852cc;">
                                                        <label class="input-check-color__body">
                                                            <input class="input-check-color__input" type="checkbox" /> <span class="input-check-color__box"></span>
                                                            <span class="input-check-color__icon">
                                                                <svg width="12px" height="9px"><path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" /></svg>
                                                            </span>
                                                            <span class="input-check-color__stick"></span>
                                                        </label>
                                                    </span>
                                                </label>
                                                <label class="filter-color__item">
                                                    <span class="filter-color__check input-check-color" style="color: #e53981;">
                                                        <label class="input-check-color__body">
                                                            <input class="input-check-color__input" type="checkbox" /> <span class="input-check-color__box"></span>
                                                            <span class="input-check-color__icon">
                                                                <svg width="12px" height="9px"><path d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" /></svg>
                                                            </span>
                                                            <span class="input-check-color__stick"></span>
                                                        </label>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-filters__actions d-flex"><button class="btn btn-primary btn-sm">Filter</button> <button class="btn btn-secondary btn-sm">Reset</button></div>
                </div>
                <?php  
                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 5,
                    );

                    $loop = new WP_Query( $args );
                    ?>
                        <div class="card widget widget-products">
                        <div class="widget__header"><h4>Latest Products</h4></div>
                        <div class="widget-products__list">
                    <?php
                        
                    
                    
                    while ( $loop->have_posts() ) : $loop->the_post();
                        global $product;
                        ?>
                        <div class="widget-products__item">
                        <div class="widget-products__image image image--type--product">
                            <a class="image__body"  href="<?php echo get_permalink($loop->post->ID) ?>">
                            <!-- <img class="image__tag" src="<?php //echo get_the_post_thumbnail($loop->post->ID, 'thumbnail'); ?>" alt="" /> -->
                            <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'thumbnail', array('class' => 'image__tag'), 'shop_catalog');
                            else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" />'; ?>  
                            </a>
                        </div>
                        <div class="widget-products__info">
                            <div class="widget-products__name"><a href="<?php echo get_permalink($loop->post->ID) ?>"><?php the_title(); ?></a></div>
                            <div class="widget-products__prices"><div class="widget-products__price widget-products__price--current"><?php echo $product->get_price_html(); ?></div></div>
                        </div>
                        </div>
                    <?php 
                    //echo '<br /><a href="'.get_permalink().'">' . woocommerce_get_product_thumbnail().' '.get_the_title().'</a>'; 
                    endwhile;
                    ?> 
                    </div> 
                    </div> 
                    <?php
                    wp_reset_query();
                ?>
                <!-- <div class="card widget widget-products d-none d-lg-block">
                    <div class="widget__header"><h4>Latest Products</h4></div>
                    <div class="widget-products__list">
                        <div class="widget-products__item">
                            <div class="widget-products__image image image--type--product">
                                <a href="product-full.html" class="image__body"><img class="image__tag" src="<?php echo get_template_directory_uri(); ?>/assets/images/products/product-1-64x64.jpg" alt="" /></a>
                            </div>
                            <div class="widget-products__info">
                                <div class="widget-products__name"><a href="product-full.html">Brandix Spark Plug Kit ASR-400</a></div>
                                <div class="widget-products__prices"><div class="widget-products__price widget-products__price--current">$19.00</div></div>
                            </div>
                        </div>
                        <div class="widget-products__item">
                            <div class="widget-products__image image image--type--product">
                                <a href="product-full.html" class="image__body"><img class="image__tag" src="<?php echo get_template_directory_uri(); ?>/assets/images/products/product-2-64x64.jpg" alt="" /></a>
                            </div>
                            <div class="widget-products__info">
                                <div class="widget-products__name"><a href="product-full.html">Brandix Brake Kit BDX-750Z370-S</a></div>
                                <div class="widget-products__prices"><div class="widget-products__price widget-products__price--current">$224.00</div></div>
                            </div>
                        </div>
                        <div class="widget-products__item">
                            <div class="widget-products__image image image--type--product">
                                <a href="product-full.html" class="image__body"><img class="image__tag" src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/images/products/product-3-64x64.jpg" alt="" /></a>
                            </div>
                            <div class="widget-products__info">
                                <div class="widget-products__name"><a href="product-full.html">Left Headlight Of Brandix Z54</a></div>
                                <div class="widget-products__prices">
                                    <div class="widget-products__price widget-products__price--new">$349.00</div>
                                    <div class="widget-products__price widget-products__price--old">$415.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-products__item">
                            <div class="widget-products__image image image--type--product">
                                <a href="product-full.html" class="image__body"><img class="image__tag" src="<?php echo get_template_directory_uri(); ?>/assets/images/products/product-4-64x64.jpg" alt="" /></a>
                            </div>
                            <div class="widget-products__info">
                                <div class="widget-products__name"><a href="product-full.html">Glossy Gray 19" Aluminium Wheel AR-19</a></div>
                                <div class="widget-products__prices"><div class="widget-products__price widget-products__price--current">$589.00</div></div>
                            </div>
                        </div>
                        <div class="widget-products__item">
                            <div class="widget-products__image image image--type--product">
                                <a href="product-full.html" class="image__body"><img class="image__tag" src="<?php echo get_template_directory_uri(); ?>/assets/images/products/product-5-64x64.jpg" alt="" /></a>
                            </div>
                            <div class="widget-products__info">
                                <div class="widget-products__name"><a href="product-full.html">Twin Exhaust Pipe From Brandix Z54</a></div>
                                <div class="widget-products__prices"><div class="widget-products__price widget-products__price--current">$749.00</div></div>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>
</div>