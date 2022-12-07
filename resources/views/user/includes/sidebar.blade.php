        <div id="dashboard-sidebar"
            class="dashboard-sidebar ps z-50 w-64 transition-all bg-gray-800 dark:bg-foreground text-gray-100 fixed lg:left-0 top-0 -left-64 h-full">
            <a href="index-2.html" class="px-6 p-8 flex items-center">
                <img class="w-7 h-7 mr-2" src="{{ asset('website/assets/img/logo.png') }}" alt="" />
                <p class="text-lg font-semibold">Doctor</p>
            </a>
            <div class="p-6 min-h-[85%]">
                <ul class="mb-10">
                    <p class="uppercase text-gray-500 mb-3 text-sm ml-4">pages</p>
                    <li data-active-page="dashboard" data-page-name="dashboard"
                        class="sidebar-link flex items-center mb-2">
                        <a href="{{ route('user.dash') }}"
                            class="flex items-center hover:bg-gray-700 hover:text-blue-500 flex-1 py-2 px-3 rounded-lg">
                            <svg class="mr-2 w-5 h-5">
                                @include('user.includes.sprite-svg', ['name'=> 'dashboard'])
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    {{--  <li data-active-page="dashboard" data-page-name="purchase-history" class="sidebar-link mb-2">
                        <a href="dashboard-purchase-history.html"
                            class="flex items-center flex-1 py-2 px-3 rounded-lg hover:bg-gray-700 hover:text-blue-500">
                            <svg class="mr-2 w-4 h-4">
                                 @include('user.includes.sprite-svg', ['name'=> 'purchase'])
                            </svg> Purchase History </a>
                    </li>
                    <li data-active-page="dashboard" data-page-name="blog-list" class="sidebar-link mb-2">
                        <a href="dashboard-blog-list.html"
                            class="flex items-center flex-1 py-2 px-3 rounded-lg hover:bg-gray-700 hover:text-blue-500">
                            <svg class="mr-2 w-4 h-4">
                                 @include('user.includes.sprite-svg', ['name'=> 'blog-list'])
                            </svg> Blog List </a>
                    </li>
                    <li data-active-page="dashboard" data-page-name="edit-package"
                        class="sidebar-link flex items-center mb-2">
                        <a href="dashboard-edit-package.html"
                            class="flex items-center flex-1 py-2 px-3 rounded-lg hover:bg-gray-700 hover:text-blue-500">
                            <svg class="mr-2 w-4 h-4">
                                 @include('user.includes.sprite-svg', ['name'=> 'edit-page'])
                            </svg> Edit Package </a>
                    </li>
                    <li data-active-page="dashboard" data-page-name="packages"
                        class="sidebar-link flex items-center mb-2">
                        <a href="dashboard-package.html"
                            class="flex items-center flex-1 py-2 px-3 rounded-lg hover:bg-gray-700 hover:text-blue-500">
                            <svg class="mr-2 w-4 h-4">
                                 @include('user.includes.sprite-svg', ['name'=> 'package'])
                            </svg> Packages </a>
                    </li>
                    <li data-active-page="dashboard" data-page-name="agent-list"
                        class="sidebar-link flex items-center mb-2">
                        <a href="dashboard-agent-list.html"
                            class="flex items-center flex-1 py-2 px-3 rounded-lg hover:bg-gray-700 hover:text-blue-500">
                            <svg class="mr-2 w-4 h-4">
                                 @include('user.includes.sprite-svg', ['name'=> 'agent-list'])
                            </svg> Agent List </a>
                    </li>
                    <li data-active-page="dashboard" data-page-name="all-listing"
                        class="sidebar-link flex items-center mb-2">
                        <a href="dashboard-all-listing.html"
                            class="flex items-center flex-1 py-2 px-3 rounded-lg hover:bg-gray-700 hover:text-blue-500">
                            <svg class="mr-2 w-4 h-4">
                                 @include('user.includes.sprite-svg', ['name'=> 'listing'])
                            </svg> All Listing </a>
                    </li>
                    <li data-active-page="dashboard" data-page-name="add-listing"
                        class="sidebar-link flex items-center mb-2">
                        <a href="dashboard-addlisting-2.html"
                            class="flex items-center flex-1 py-2 px-3 rounded-lg hover:bg-gray-700 hover:text-blue-500">
                            <svg class="mr-2 w-4 h-4">
                                 @include('user.includes.sprite-svg', ['name'=> 'listing2'])
                            </svg> Add Listing </a>
                    </li>
                    <li data-active-page="dashboard" data-page-name="messages"
                        class="sidebar-link flex items-center mb-2">
                        <a href="dashboard-messages.html"
                            class="flex items-center flex-1 py-2 px-3 rounded-lg hover:bg-gray-700 hover:text-blue-500">
                            <svg class="mr-2 w-5 h-5">
                                 @include('user.includes.sprite-svg', ['name'=> 'message'])
                            </svg> Messages </a>
                    </li>
                    <li data-active-page="dashboard" data-page-name="booking"
                        class="sidebar-link flex items-center mb-2">
                        <a href="dashboard-booking.html"
                            class="flex items-center flex-1 py-2 px-3 rounded-lg hover:bg-gray-700 hover:text-blue-500">
                            <svg class="mr-2 w-5 h-5">
                                 @include('user.includes.sprite-svg', ['name'=> 'booking'])
                            </svg> Booking </a>
                    </li>  --}}
                </ul>
                {{--  <ul class="mb-10">
                    <p class="uppercase text-gray-500 mb-3 text-sm ml-4">listing</p>
                    <li>
                        <button type="button" id="listing" aria-expanded="false" data-hc-control="listing"
                            aria-controls="listingNav"
                            class="group w-full flex items-center hover:bg-gray-700 hover:text-blue-500 flex-1 py-2 px-3 rounded-lg">
                            <svg class="mr-2 w-5 h-5">
                                 @include('user.includes.sprite-svg', ['name'=> 'listing-grid'])
                            </svg>
                            <div class="w-full flex items-center justify-between">
                                <span>Listing</span>
                                <svg class="h-[14px] w-[14px] group-hover:text-blue-500 ml-5">
                                     @include('user.includes.sprite-svg', ['name'=> 'arrow-down'])
                                </svg>
                            </div>
                        </button>
                        <div class="pl-5" id="listingNav" data-hc-content="listing" aria-hidden="false">
                            <ul class="pt-2">
                                <li data-active-page="dashboard" data-page-name="my-listing"
                                    data-target-dropdown="listing" class="sidebar-link flex items-center mb-2">
                                    <a href="dashboard-mylisting.html"
                                        class="flex items-center flex-1 py-2 px-3 rounded-lg hover:bg-gray-700 text-sm hover:text-blue-500">
                                        <svg class="mr-2 w-4 h-4">
                                             @include('user.includes.sprite-svg', ['name'=> 'listing-grid'])
                                        </svg> My Listing </a>
                                </li>
                                <li data-active-page="dashboard" data-page-name="my-listing-grid"
                                    data-target-dropdown="listing" class="sidebar-link flex items-center mb-2">
                                    <a href="dashboard-mylisting-grid-view.html"
                                        class="flex items-center flex-1 py-2 px-3 rounded-lg hover:bg-gray-700 text-sm hover:text-blue-500">
                                        <svg class="mr-2 w-4 h-4">
                                             @include('user.includes.sprite-svg', ['name'=> 'listing-grid'])
                                        </svg> My Listing Grid view </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li data-active-page="dashboard" data-page-name="bookmarks"
                        class="sidebar-link flex items-center mb-2">
                        <a href="dashboard-bookmarks.html"
                            class="flex items-center flex-1 py-2 px-3 rounded-lg hover:bg-gray-700 hover:text-blue-500">
                            <svg class="mr-2 w-5 h-5">
                                 @include('user.includes.sprite-svg', ['name'=> 'bookmarks'])
                            </svg> Bookmarks </a>
                    </li>
                    <li data-active-page="dashboard" data-page-name="reviews"
                        class="sidebar-link flex items-center mb-2">
                        <a href="dashboard-reviews.html"
                            class="flex items-center flex-1 py-2 px-3 rounded-lg hover:bg-gray-700 hover:text-blue-500">
                            <svg class="mr-2 w-5 h-5">
                                 @include('user.includes.sprite-svg', ['name'=> 'review'])
                            </svg> Reviews </a>
                    </li>
                </ul>
                <ul class="mb-10">
                    <p class="uppercase text-gray-500 mb-3 text-sm ml-4">account</p>
                    <li data-active-page="dashboard" data-page-name="profile"
                        class="sidebar-link flex items-center mb-2">
                        <a href="dashboard-myprofile.html"
                            class="flex items-center flex-1 py-2 px-3 rounded-lg hover:bg-gray-700 hover:text-blue-500">
                            <svg class="mr-2 w-5 h-5">
                                 @include('user.includes.sprite-svg', ['name'=> 'profile'])
                            </svg> My Profile </a>
                    </li>
                    <li data-active-page="dashboard" data-page-name="purchase"
                        class="sidebar-link flex items-center mb-2">
                        <a href="#"
                            class="flex items-center flex-1 py-2 px-3 rounded-lg hover:bg-gray-700 hover:text-blue-500">
                            <svg class="mr-2 w-5 h-5">
                                 @include('user.includes.sprite-svg', ['name'=> 'logout'])
                            </svg> logout </a>
                    </li>
                </ul>  --}}
            </div>
        </div>
