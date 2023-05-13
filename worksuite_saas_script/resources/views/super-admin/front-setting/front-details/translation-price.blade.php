@extends('layouts.app')

@section('content')
    <!-- SETTINGS START -->
    <div class="w-100 d-flex">

        <x-super-admin.front-setting-sidebar :activeMenu="$activeSettingMenu"/>
        @include('super-admin.common.language-selector-with-view', [ 'route' => 'superadmin.front-settings.price-settings.lang'])

    </div>
    <!-- SETTINGS END -->
@endsection

@push('scripts')
    <script>

        $("body").on("click", "#saveFrontSetting", function () {
            updateLang("{{ route('superadmin.front-settings.price-settings.update_lang') }}")
        });
    </script>
@endpush
