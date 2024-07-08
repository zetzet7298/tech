<x-base-auth-layout>
    {{-- @php
        $companyNameKey = config('constants.COMPANY_NAME');
        $companyNameValue = \App\Models\Setting::where('key', $companyNameKey)->first()->value;

        $settings = \App\Models\Setting::getByType(config('constants.SETTING_TYPE_DASHBOARD'));
        $ABOUT_TITLE = $settings[config('constants.ABOUT_TITLE')]['value'];
        $ABOUT_DESC = $settings[config('constants.ABOUT_DESC')]['value'];
        $SLIDER_1 = $settings[config('constants.SLIDER_1')]['value'];
        $SLIDER_2 = $settings[config('constants.SLIDER_2')]['value'];
        $SLIDER_3 = $settings[config('constants.SLIDER_3')]['value'];
        $SOLUTION_TITLE = $settings[config('constants.SOLUTION_TITLE')]['value'];
        $SOLUTION_DESCRIPTION = $settings[config('constants.SOLUTION_DESCRIPTION')]['value'];
    @endphp --}}

    <div class="content flex-row-fluid" id="kt_content">
        <div class="card">
            
        </div>
    </div>
</x-base-auth-layout>
