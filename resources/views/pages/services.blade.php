<x-layout>
    <x-slot name='title'>Services</x-slot>
    <x-slot name='content'>
        <section class="container">
            <div class="row mt-5">
                <div class="col-12">
                    <h2 class="text-uppercase text-center text-decoration-underline text-primary ">My services</h2>
                </div>
            </div>

            <div class="row mt-5">
                @php
                    $message =" Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis rem odio exercitationem necessitatibus sunt sit molestiae vitae debitis velit vero."
                @endphp


                <x-card  servicetitle="Service One"  :serviceMessage=$message/>
                <x-card  servicetitle="Service Two"  :serviceMessage=$message/>
                <x-card  servicetitle="Service Three"  :serviceMessage=$message/>
                <x-card  servicetitle="Service Four"  :serviceMessage=$message/>

            </div>

            <div class="row mt-5 mb-5">
                {{-- @php
                    $message =" Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis rem odio exercitationem necessitatibus sunt sit molestiae vitae debitis velit vero."
                @endphp --}}


                <x-card  servicetitle="Service Five"  :serviceMessage=$message/>
                <x-card  servicetitle="Service Six"  :serviceMessage=$message/>
                <x-card  servicetitle="Service Seven"  :serviceMessage=$message/>
                <x-card  servicetitle="Service Eight"  :serviceMessage=$message/>

            </div>




        </section>
    </x-slot>
</x-layout>
