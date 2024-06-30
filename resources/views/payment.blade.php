<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soundwave!</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-r from-purple-500 to-pink-500"> 
    
    <x-navbar/> 
    <div class="bg-gray-100 dark:bg-gray-900">
        <div class="w-full max-w-2xl mx-auto p-8">
            <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md border dark:border-gray-700">
                <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">Checkout</h1>
    
                <!-- Shipping Address -->
                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-gray-700 dark:text-white mb-2">Shipping Address</h2>
                    <div class="mt-4">
                        <label for="name" class="block text-gray-700 dark:text-white mb-1">Name</label>
                        <input type="text" name="name" id="name" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                    </div>
    
                    <div class="mt-4">
                        <label for="email" class="block text-gray-700 dark:text-white mb-1">Email</label>
                        <input type="email" name="email" id="email" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                    </div>
    
                    <div class="mt-4">
                        <label for="phone_number" class="block text-gray-700 dark:text-white mb-1">Phone Number</label>
                        <input type="text" name="phone_number" id="phone_number" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                    </div>
    
                    <div class="mt-4">
                        <label for="address" class="block text-gray-700 dark:text-white mb-1">Address</label>
                        <input type="text" id="address" name="address" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                    </div>
    
                    <div class="mt-4">
                        <label for="city" class="block text-gray-700 dark:text-white mb-1">City</label>
                        <input type="text" id="city" name="city" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                    </div>
    
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div>
                            <label for="state" class="block text-gray-700 dark:text-white mb-1">State</label>
                            <input type="text" id="state" name="state" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                        </div>
                        <div>
                            <label for="zip" class="block text-gray-700 dark:text-white mb-1">ZIP Code</label>
                            <input type="text" id="zip" name="zip_code" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                        </div>
                    </div>
                </div>
    
                <!-- Payment Information -->
                <section class="py-24 relative">
                    <div class="w-full max-w-7xl px-4 md:px-5 lg-6 mx-auto">
                        <div class="hidden lg:grid grid-cols-2 py-6">
                            <div class="font-normal text-xl leading-8 text-gray-500">Product</div>
                            <p class="font-normal text-xl leading-8 text-gray-500 flex items-center justify-between">
                                <span class="w-full max-w-[260px] text-center">Quantity</span>
                            </p>
                        </div>
            
                        <div class="grid grid-cols-1 lg:grid-cols-2 min-[550px]:gap-6 border-t border-gray-200 py-6">
                            <div
                                class="flex items-center flex-col min-[550px]:flex-row gap-3 min-[550px]:gap-6 w-full max-xl:justify-center max-xl:max-w-xl max-xl:mx-auto">
                                <div class="pro-data w-full max-w-sm ">
                                    <h5 class="font-semibold text-xl leading-6 text-black max-[500px]:text-center">
                                        {{$data->nama}}
                                    </h5>
                                    <input type="hidden" id="harga" value="{{$data->harga}}">
                                </div>
                            </div>
                            <div
                                class="flex items-center flex-col min-[550px]:flex-row w-full max-xl:max-w-xl max-xl:mx-auto gap-2">
                                <div class="flex items-center w-full mx-auto justify-center">
                                    <button
                                        id="minus"
                                        class="group rounded-l-full px-6 py-[18px] border border-gray-200 flex items-center justify-center shadow-sm shadow-transparent transition-all duration-500 hover:shadow-gray-200 hover:border-gray-300 hover:bg-gray-50">
                                        <svg class="stroke-gray-900 transition-all duration-500 group-hover:stroke-black"
                                            xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                            fill="none">
                                            <path d="M16.5 11H5.5" stroke="" stroke-width="1.6" stroke-linecap="round" />
                                            <path d="M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6"
                                                stroke-linecap="round" />
                                            <path d="M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6"
                                                stroke-linecap="round" />
                                        </svg>
                                    </button>
                                    <input type="text"
                                        id="qty"
                                        class="border-y border-gray-200 outline-none text-gray-900 font-semibold text-lg w-full max-w-[118px] min-w-[80px] placeholder:text-gray-900 py-[15px] text-center bg-transparent"
                                        value="1">
                                    <button
                                        id="plus"
                                        class="group rounded-r-full px-6 py-[18px] border border-gray-200 flex items-center justify-center shadow-sm shadow-transparent transition-all duration-500 hover:shadow-gray-200 hover:border-gray-300 hover:bg-gray-50">
                                        <svg class="stroke-gray-900 transition-all duration-500 group-hover:stroke-black"
                                            xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                            fill="none">
                                            <path d="M11 5.5V16.5M16.5 11H5.5" stroke="" stroke-width="1.6"
                                                stroke-linecap="round" />
                                            <path d="M11 5.5V16.5M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6"
                                                stroke-linecap="round" />
                                            <path d="M11 5.5V16.5M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6"
                                                stroke-linecap="round" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-6 w-full mb-8 max-lg:max-w-xl max-lg:mx-auto">
                            <div class="flex items-center justify-between w-full py-6">
                                <p class="font-manrope font-medium text-2xl leading-9 text-gray-900">Total</p>
                                <h6 id="total" class="font-manrope font-medium text-2xl leading-9 text-indigo-500">{{number_format($data->harga)}}</h6>
                            </div>
                        </div>
                        <div class="flex items-center flex-col sm:flex-row justify-center gap-3 mt-8">
                            <button
                                class="rounded-full w-full max-w-[280px] py-4 text-center justify-center items-center bg-indigo-600 font-semibold text-lg text-white flex transition-all duration-500 hover:bg-indigo-700">Continue
                                to Payment
                                <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22"
                                    fill="none">
                                    <path d="M8.75324 5.49609L14.2535 10.9963L8.75 16.4998" stroke="white" stroke-width="1.6"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    
    <x-footer/>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
        $('#plus').click(function(e){
           qty = parseInt($('#qty').val());
           qty = qty + 1
           $('#qty').val(qty)
           $('#total').text(numberWithCommas(qty * parseFloat($('#harga').val())))
           })
           $('#minus').click(function(e){
               qty = parseInt($('#qty').val());
               qty = qty - 1
               $('#qty').val(qty)
               $('#total').text(numberWithCommas(qty * parseFloat($('#harga').val())))
        })
    </script>
    
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY')}}"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function(){
          // SnapToken acquired from previous step
          snap.pay('<?=$snapToken?>', {
            // Optional
            onSuccess: function(result){
              /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            },
            // Optional
            onPending: function(result){
              /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            },
            // Optional
            onError: function(result){
              /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            }
          });
        };
    </script>
</body>
</html>
{{-- 
@include('/components/call-to-action') <div class="blur-target"> </div> --}}