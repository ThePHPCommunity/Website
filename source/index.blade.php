@extends('_layouts.main')

@section('body')
    <div class="relative bg-white">
        <div class="h-56 bg-indigo-600 sm:h-72 lg:absolute lg:left-0 lg:h-full lg:w-1/2">
            <img class="h-full w-full object-cover" src="/assets/build/images/IMG_20181012_203235072_HDR.jpg" alt="Support team">
        </div>
        <div class="relative mx-auto max-w-7xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16">
            <div class="mx-auto max-w-2xl lg:mr-0 lg:ml-auto lg:w-1/2 lg:max-w-none lg:pl-10 py-20">
                <h2 class="mt-6 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Welcome! 👋</h2>
                <p class="mt-6 text-lg text-gray-500">As one of the fastest growing PHP communities in the UK we have setup a space to share insight, knowledge and a touch of humour. Take a look around to find some really valuable information , find out about our events and more. Don’t be shy, get involved on our Facebook group and when you feel brave enough, join up to our Slack community! (we don’t bite)</p>
                <div class="mt-8 overflow-hidden">
                    <dl class="-mx-8 -mt-8 flex flex-wrap">
                        <div class="flex flex-col px-8 pt-8">
                            <dt class="order-2 text-base font-medium text-gray-500">Facebook Members</dt>
                            <dd class="order-1 text-2xl font-bold text-indigo-600 sm:text-3xl sm:tracking-tight">350+</dd>
                        </div>
                        <div class="flex flex-col px-8 pt-8">
                            <dt class="order-2 text-base font-medium text-gray-500">Slack Members</dt>
                            <dd class="order-1 text-2xl font-bold text-indigo-600 sm:text-3xl sm:tracking-tight">250+</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
@endsection
