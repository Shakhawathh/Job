<x-layout>

    <div class="space-y-10">
     
 
     <section class="pt-10" >
 
         <x-section-heading>All Job</x-section-heading>
         
         <div class="grid lg:grid-cols-3 sm:grid grid-cols-3 gap-4 ">

            @foreach ($jobs as $job )
            <x-job-card :$job/>
            @endforeach
           
         </div>
     </section>
 
     
    </div>
 
 </x-layout>