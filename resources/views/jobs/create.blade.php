<x-layout>

    <x-page-heading>Job Create</x-page-heading>
    <x-forms.divider />

    <x-forms.form method="POST" action="/jobs" placeholder="CEO" >
        <x-forms.input label="Title" name="title" placeholder="CEO"  />
        <x-forms.input label="Salary" name="salary"  placeholder="$74,000"  />
        <x-forms.input label="Location" name="location"  placeholder="Dhaka , Khulna"/>

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url"  placeholder="https://shahmediapro.com/"/>
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />


        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags"  placeholder="Fontend , video"/>




        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>

</x-layout>