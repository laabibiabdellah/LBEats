<div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">

    <!-- Categories -->
    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">

        @foreach($categories as $category)
            <li class="nav-item">
                <a class="d-flex align-items-center text-start mx-3 {{ $loop->first ? 'ms-0 active' : '' }} pb-3"
                   data-bs-toggle="pill"
                   href="#tab-{{ $category->id }}">

                    @switch($category->name)
                        @case('Breakfast')
                            <i class="fa fa-coffee fa-2x text-primary"></i>
                            @break

                        @case('Lunch')
                            <i class="fa fa-hamburger fa-2x text-primary"></i>
                            @break

                        @case('Dinner')
                            <i class="fa fa-utensils fa-2x text-primary"></i>
                            @break

                        @default
                            <i class="fa fa-utensils fa-2x text-primary"></i>
                    @endswitch

                    <div class="ps-3">
                        <small class="text-body">Menu</small>
                        <h6 class="mt-n1 mb-0">{{ $category->name }}</h6>
                    </div>

                </a>
            </li>
        @endforeach

    </ul>

    <!-- Foods -->
    <div class="tab-content">

        @foreach($categories as $category)

            <div id="tab-{{ $category->id }}"
                 class="tab-pane fade show p-0 {{ $loop->first ? 'active' : '' }}">

                <div class="row g-4">

                    @foreach($category->foods as $food)

                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">

                                <img class="flex-shrink-0 img-fluid rounded"
                                     src="{{ asset($food->img) }}"
                                     alt="{{ $food->name }}"
                                     style="width: 80px; height:80px; object-fit:cover;">

                                <div class="w-100 d-flex flex-column text-start ps-4">

                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>{{ $food->name }}</span>
                                        <span class="text-primary">
                                            ${{ number_format($food->price,2) }}
                                        </span>
                                    </h5>

                                    <small class="fst-italic">
                                        {{ $food->description }}
                                    </small>

                                </div>

                            </div>
                        </div>

                    @endforeach

                </div>

            </div>

        @endforeach

    </div>
    
</div>