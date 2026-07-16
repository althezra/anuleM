<x-app-layout>
    @section('title', 'Profile')
    @php
        $businessInfo = Auth::user()->businessInformation;
    @endphp
    <x-slot name="header">
        <h1 class="text-4xl font-semibold">Profile</h1>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div> --}}
    <div class="grid grid-cols-1 xl:grid-cols-12 gap-2 xl:gap-4">
        <div class="col-span-1 xl:col-span-12 flex flex-col gap-2 xl:gap-4">
            <div class="grid grid-cols-1 xl:grid-cols-4 gap-4">
                <div class="">
                    <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-4 sticky top-0">
                        <div class="inline-flex justify-between items-center">
                            <span class="font-medium">Your Profile</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-circle-user-round"><path d="M18 20a6 6 0 0 0-12 0"/><circle cx="12" cy="10" r="4"/><circle cx="12" cy="12" r="10"/></svg>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-4">
                            <img src="{{ route('avatar') }}?name={{ Auth::user()->name }}&background=302995&color=BCB7F2" alt="" class="rounded-full w-45 h-45" loading="lazy">
                            <div class="flex flex-col w-full min-w-0">
                                <span class="text-2xl font-semibold text-center truncate">{{ Auth::user()->name }}</span>
                                <span class="text-lg text-center">@if (Auth::user()->role == 0)
                                    Admin
                                @elseif (Auth::user()->role == 1)
                                    Operator
                                @else
                                    Member
                                @endif</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 xl:col-span-3 grid grid-cols-1 gap-2">
                    <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-4">
                        <div class="inline-flex justify-between items-center">
                            <span class="font-medium">Account Information</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-user-round-pen"><path d="M2 21a8 8 0 0 1 10.821-7.487"/><path d="M21.378 16.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z"/><circle cx="10" cy="8" r="5"/></svg>
                        </div>
                        <form method="post" action="{{ route('profile.update') }}">
                            @csrf
                            @method('patch')
                            <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
                                <div class="col-span-1 xl:col-span-2 flex flex-col xl:flex-row gap-2">
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="name" class="text-xs xl:text-sm text-[#1F1F1F]">Full Name</label>
                                        <input type="text" class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out" name="name" id="name" placeholder="Full Name" autocomplete="off" value="{{ Auth::user()->name }}" required>
                                        <span class="text-xs text-[#1F1F1F]">Use real names not using company names / label names / stage names.</span>
                                    </div>
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="email" class="text-xs xl:text-sm text-[#1F1F1F]">Email Address</label>
                                        <input type="email" class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out" name="email" id="email" placeholder="Email" autocomplete="off" value="{{ Auth::user()->email }}" required>
                                    </div>
                                </div>
                                <div class="cols-span-1 xl:col-span-2 w-full flex flex-col gap-2">
                                    <div class="flex justify-start items-center">
                                        <button type="submit" class="rounded-sm px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] cursor-pointer transition duration-150 ease-in-out">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-4">
                        <div class="inline-flex justify-between items-center">
                            <span class="font-medium">Business Information</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-building"><rect width="16" height="20" x="4" y="2" rx="2" ry="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01"/><path d="M16 6h.01"/><path d="M12 6h.01"/><path d="M12 10h.01"/><path d="M12 14h.01"/><path d="M16 10h.01"/><path d="M16 14h.01"/><path d="M8 10h.01"/><path d="M8 14h.01"/></svg>
                        </div>
                        <form method="POST" action="{{ route('business-information') }}">
                            @csrf
                            <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
                                <div class="col-span-1 xl:col-span-2 w-full flex flex-col gap-2">
                                    <label for="country" class="text-xs xl:text-sm text-[#1F1F1F]">Country</label>
                                    <select class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] cursor-pointer transition duration-150 ease-in-out" name="country" id="country" placeholder="Country" autocomplete="off" required>
                                        <option value="AF" {{ old('country', $businessInfo->country ?? '') == 'AF' ? 'selected' : '' }}>Afghanistan</option>
                                        <option value="AX" {{ old('country', $businessInfo->country ?? '') == 'AX' ? 'selected' : '' }}>Åland Islands</option>
                                        <option value="AL" {{ old('country', $businessInfo->country ?? '') == 'AL' ? 'selected' : '' }}>Albania</option>
                                        <option value="DZ" {{ old('country', $businessInfo->country ?? '') == 'DZ' ? 'selected' : '' }}>Algeria</option>
                                        <option value="AS" {{ old('country', $businessInfo->country ?? '') == 'AS' ? 'selected' : '' }}>American Samoa</option>
                                        <option value="AD" {{ old('country', $businessInfo->country ?? '') == 'AD' ? 'selected' : '' }}>Andorra</option>
                                        <option value="AO" {{ old('country', $businessInfo->country ?? '') == 'AO' ? 'selected' : '' }}>Angola</option>
                                        <option value="AI" {{ old('country', $businessInfo->country ?? '') == 'AI' ? 'selected' : '' }}>Anguilla</option>
                                        <option value="AQ" {{ old('country', $businessInfo->country ?? '') == 'AQ' ? 'selected' : '' }}>Antarctica</option>
                                        <option value="AG" {{ old('country', $businessInfo->country ?? '') == 'AG' ? 'selected' : '' }}>Antigua and Barbuda</option>
                                        <option value="AR" {{ old('country', $businessInfo->country ?? '') == 'AR' ? 'selected' : '' }}>Argentina</option>
                                        <option value="AM" {{ old('country', $businessInfo->country ?? '') == 'AM' ? 'selected' : '' }}>Armenia</option>
                                        <option value="AW" {{ old('country', $businessInfo->country ?? '') == 'AW' ? 'selected' : '' }}>Aruba</option>
                                        <option value="AU" {{ old('country', $businessInfo->country ?? '') == 'AU' ? 'selected' : '' }}>Australia</option>
                                        <option value="AT" {{ old('country', $businessInfo->country ?? '') == 'AT' ? 'selected' : '' }}>Austria</option>
                                        <option value="AZ" {{ old('country', $businessInfo->country ?? '') == 'AZ' ? 'selected' : '' }}>Azerbaijan</option>
                                        <option value="BS" {{ old('country', $businessInfo->country ?? '') == 'BS' ? 'selected' : '' }}>Bahamas</option>
                                        <option value="BH" {{ old('country', $businessInfo->country ?? '') == 'BH' ? 'selected' : '' }}>Bahrain</option>
                                        <option value="BD" {{ old('country', $businessInfo->country ?? '') == 'BD' ? 'selected' : '' }}>Bangladesh</option>
                                        <option value="BB" {{ old('country', $businessInfo->country ?? '') == 'BB' ? 'selected' : '' }}>Barbados</option>
                                        <option value="BY" {{ old('country', $businessInfo->country ?? '') == 'BY' ? 'selected' : '' }}>Belarus</option>
                                        <option value="BE" {{ old('country', $businessInfo->country ?? '') == 'BE' ? 'selected' : '' }}>Belgium</option>
                                        <option value="BZ" {{ old('country', $businessInfo->country ?? '') == 'BZ' ? 'selected' : '' }}>Belize</option>
                                        <option value="BJ" {{ old('country', $businessInfo->country ?? '') == 'BJ' ? 'selected' : '' }}>Benin</option>
                                        <option value="BM" {{ old('country', $businessInfo->country ?? '') == 'BM' ? 'selected' : '' }}>Bermuda</option>
                                        <option value="BT" {{ old('country', $businessInfo->country ?? '') == 'BT' ? 'selected' : '' }}>Bhutan</option>
                                        <option value="BO" {{ old('country', $businessInfo->country ?? '') == 'BO' ? 'selected' : '' }}>Bolivia, Plurinational State of</option>
                                        <option value="BQ" {{ old('country', $businessInfo->country ?? '') == 'BQ' ? 'selected' : '' }}>Bonaire, Sint Eustatius and Saba</option>
                                        <option value="BA" {{ old('country', $businessInfo->country ?? '') == 'BA' ? 'selected' : '' }}>Bosnia and Herzegovina</option>
                                        <option value="BW" {{ old('country', $businessInfo->country ?? '') == 'BW' ? 'selected' : '' }}>Botswana</option>
                                        <option value="BV" {{ old('country', $businessInfo->country ?? '') == 'BV' ? 'selected' : '' }}>Bouvet Island</option>
                                        <option value="BR" {{ old('country', $businessInfo->country ?? '') == 'BR' ? 'selected' : '' }}>Brazil</option>
                                        <option value="IO" {{ old('country', $businessInfo->country ?? '') == 'IO' ? 'selected' : '' }}>British Indian Ocean Territory</option>
                                        <option value="BN" {{ old('country', $businessInfo->country ?? '') == 'BN' ? 'selected' : '' }}>Brunei Darussalam</option>
                                        <option value="BG" {{ old('country', $businessInfo->country ?? '') == 'BG' ? 'selected' : '' }}>Bulgaria</option>
                                        <option value="BF" {{ old('country', $businessInfo->country ?? '') == 'BF' ? 'selected' : '' }}>Burkina Faso</option>
                                        <option value="BI" {{ old('country', $businessInfo->country ?? '') == 'BI' ? 'selected' : '' }}>Burundi</option>
                                        <option value="KH" {{ old('country', $businessInfo->country ?? '') == 'KH' ? 'selected' : '' }}>Cambodia</option>
                                        <option value="CM" {{ old('country', $businessInfo->country ?? '') == 'CM' ? 'selected' : '' }}>Cameroon</option>
                                        <option value="CA" {{ old('country', $businessInfo->country ?? '') == 'CA' ? 'selected' : '' }}>Canada</option>
                                        <option value="CV" {{ old('country', $businessInfo->country ?? '') == 'CV' ? 'selected' : '' }}>Cape Verde</option>
                                        <option value="KY" {{ old('country', $businessInfo->country ?? '') == 'KY' ? 'selected' : '' }}>Cayman Islands</option>
                                        <option value="CF" {{ old('country', $businessInfo->country ?? '') == 'CF' ? 'selected' : '' }}>Central African Republic</option>
                                        <option value="TD" {{ old('country', $businessInfo->country ?? '') == 'TD' ? 'selected' : '' }}>Chad</option>
                                        <option value="CL" {{ old('country', $businessInfo->country ?? '') == 'CL' ? 'selected' : '' }}>Chile</option>
                                        <option value="CN" {{ old('country', $businessInfo->country ?? '') == 'CN' ? 'selected' : '' }}>China</option>
                                        <option value="CX" {{ old('country', $businessInfo->country ?? '') == 'CX' ? 'selected' : '' }}>Christmas Island</option>
                                        <option value="CC" {{ old('country', $businessInfo->country ?? '') == 'CC' ? 'selected' : '' }}>Cocos (Keeling) Islands</option>
                                        <option value="CO" {{ old('country', $businessInfo->country ?? '') == 'CO' ? 'selected' : '' }}>Colombia</option>
                                        <option value="KM" {{ old('country', $businessInfo->country ?? '') == 'KM' ? 'selected' : '' }}>Comoros</option>
                                        <option value="CG" {{ old('country', $businessInfo->country ?? '') == 'CG' ? 'selected' : '' }}>Congo</option>
                                        <option value="CD" {{ old('country', $businessInfo->country ?? '') == 'CD' ? 'selected' : '' }}>Congo, the Democratic Republic of the</option>
                                        <option value="CK" {{ old('country', $businessInfo->country ?? '') == 'CK' ? 'selected' : '' }}>Cook Islands</option>
                                        <option value="CR" {{ old('country', $businessInfo->country ?? '') == 'CR' ? 'selected' : '' }}>Costa Rica</option>
                                        <option value="CI" {{ old('country', $businessInfo->country ?? '') == 'CI' ? 'selected' : '' }}>Côte d'Ivoire</option>
                                        <option value="HR" {{ old('country', $businessInfo->country ?? '') == 'HR' ? 'selected' : '' }}>Croatia</option>
                                        <option value="CU" {{ old('country', $businessInfo->country ?? '') == 'CU' ? 'selected' : '' }}>Cuba</option>
                                        <option value="CW" {{ old('country', $businessInfo->country ?? '') == 'CW' ? 'selected' : '' }}>Curaçao</option>
                                        <option value="CY" {{ old('country', $businessInfo->country ?? '') == 'CY' ? 'selected' : '' }}>Cyprus</option>
                                        <option value="CZ" {{ old('country', $businessInfo->country ?? '') == 'CZ' ? 'selected' : '' }}>Czech Republic</option>
                                        <option value="DK" {{ old('country', $businessInfo->country ?? '') == 'DK' ? 'selected' : '' }}>Denmark</option>
                                        <option value="DJ" {{ old('country', $businessInfo->country ?? '') == 'DJ' ? 'selected' : '' }}>Djibouti</option>
                                        <option value="DM" {{ old('country', $businessInfo->country ?? '') == 'DM' ? 'selected' : '' }}>Dominica</option>
                                        <option value="DO" {{ old('country', $businessInfo->country ?? '') == 'DO' ? 'selected' : '' }}>Dominican Republic</option>
                                        <option value="EC" {{ old('country', $businessInfo->country ?? '') == 'EC' ? 'selected' : '' }}>Ecuador</option>
                                        <option value="EG" {{ old('country', $businessInfo->country ?? '') == 'EG' ? 'selected' : '' }}>Egypt</option>
                                        <option value="SV" {{ old('country', $businessInfo->country ?? '') == 'SV' ? 'selected' : '' }}>El Salvador</option>
                                        <option value="GQ" {{ old('country', $businessInfo->country ?? '') == 'GQ' ? 'selected' : '' }}>Equatorial Guinea</option>
                                        <option value="ER" {{ old('country', $businessInfo->country ?? '') == 'ER' ? 'selected' : '' }}>Eritrea</option>
                                        <option value="EE" {{ old('country', $businessInfo->country ?? '') == 'EE' ? 'selected' : '' }}>Estonia</option>
                                        <option value="ET" {{ old('country', $businessInfo->country ?? '') == 'ET' ? 'selected' : '' }}>Ethiopia</option>
                                        <option value="FK" {{ old('country', $businessInfo->country ?? '') == 'FK' ? 'selected' : '' }}>Falkland Islands (Malvinas)</option>
                                        <option value="FO" {{ old('country', $businessInfo->country ?? '') == 'FO' ? 'selected' : '' }}>Faroe Islands</option>
                                        <option value="FJ" {{ old('country', $businessInfo->country ?? '') == 'FJ' ? 'selected' : '' }}>Fiji</option>
                                        <option value="FI" {{ old('country', $businessInfo->country ?? '') == 'FI' ? 'selected' : '' }}>Finland</option>
                                        <option value="FR" {{ old('country', $businessInfo->country ?? '') == 'FR' ? 'selected' : '' }}>France</option>
                                        <option value="GF" {{ old('country', $businessInfo->country ?? '') == 'GF' ? 'selected' : '' }}>French Guiana</option>
                                        <option value="PF" {{ old('country', $businessInfo->country ?? '') == 'PF' ? 'selected' : '' }}>French Polynesia</option>
                                        <option value="TF" {{ old('country', $businessInfo->country ?? '') == 'TF' ? 'selected' : '' }}>French Southern Territories</option>
                                        <option value="GA" {{ old('country', $businessInfo->country ?? '') == 'GA' ? 'selected' : '' }}>Gabon</option>
                                        <option value="GM" {{ old('country', $businessInfo->country ?? '') == 'GM' ? 'selected' : '' }}>Gambia</option>
                                        <option value="GE" {{ old('country', $businessInfo->country ?? '') == 'GE' ? 'selected' : '' }}>Georgia</option>
                                        <option value="DE" {{ old('country', $businessInfo->country ?? '') == 'DE' ? 'selected' : '' }}>Germany</option>
                                        <option value="GH" {{ old('country', $businessInfo->country ?? '') == 'GH' ? 'selected' : '' }}>Ghana</option>
                                        <option value="GI" {{ old('country', $businessInfo->country ?? '') == 'GI' ? 'selected' : '' }}>Gibraltar</option>
                                        <option value="GR" {{ old('country', $businessInfo->country ?? '') == 'GR' ? 'selected' : '' }}>Greece</option>
                                        <option value="GL" {{ old('country', $businessInfo->country ?? '') == 'GL' ? 'selected' : '' }}>Greenland</option>
                                        <option value="GD" {{ old('country', $businessInfo->country ?? '') == 'GD' ? 'selected' : '' }}>Grenada</option>
                                        <option value="GP" {{ old('country', $businessInfo->country ?? '') == 'GP' ? 'selected' : '' }}>Guadeloupe</option>
                                        <option value="GU" {{ old('country', $businessInfo->country ?? '') == 'GU' ? 'selected' : '' }}>Guam</option>
                                        <option value="GT" {{ old('country', $businessInfo->country ?? '') == 'GT' ? 'selected' : '' }}>Guatemala</option>
                                        <option value="GG" {{ old('country', $businessInfo->country ?? '') == 'GG' ? 'selected' : '' }}>Guernsey</option>
                                        <option value="GN" {{ old('country', $businessInfo->country ?? '') == 'GN' ? 'selected' : '' }}>Guinea</option>
                                        <option value="GW" {{ old('country', $businessInfo->country ?? '') == 'GW' ? 'selected' : '' }}>Guinea-Bissau</option>
                                        <option value="GY" {{ old('country', $businessInfo->country ?? '') == 'GY' ? 'selected' : '' }}>Guyana</option>
                                        <option value="HT" {{ old('country', $businessInfo->country ?? '') == 'HT' ? 'selected' : '' }}>Haiti</option>
                                        <option value="HM" {{ old('country', $businessInfo->country ?? '') == 'HM' ? 'selected' : '' }}>Heard Island and McDonald Islands</option>
                                        <option value="VA" {{ old('country', $businessInfo->country ?? '') == 'VA' ? 'selected' : '' }}>Holy See (Vatican City State)</option>
                                        <option value="HN" {{ old('country', $businessInfo->country ?? '') == 'HN' ? 'selected' : '' }}>Honduras</option>
                                        <option value="HK" {{ old('country', $businessInfo->country ?? '') == 'HK' ? 'selected' : '' }}>Hong Kong</option>
                                        <option value="HU" {{ old('country', $businessInfo->country ?? '') == 'HU' ? 'selected' : '' }}>Hungary</option>
                                        <option value="IS" {{ old('country', $businessInfo->country ?? '') == 'IS' ? 'selected' : '' }}>Iceland</option>
                                        <option value="IN" {{ old('country', $businessInfo->country ?? '') == 'IN' ? 'selected' : '' }}>India</option>
                                        <option value="ID" {{ old('country', $businessInfo->country ?? '') == 'ID' ? 'selected' : '' }}>Indonesia</option>
                                        <option value="IR" {{ old('country', $businessInfo->country ?? '') == 'IR' ? 'selected' : '' }}>Iran, Islamic Republic of</option>
                                        <option value="IQ" {{ old('country', $businessInfo->country ?? '') == 'IQ' ? 'selected' : '' }}>Iraq</option>
                                        <option value="IE" {{ old('country', $businessInfo->country ?? '') == 'IE' ? 'selected' : '' }}>Ireland</option>
                                        <option value="IM" {{ old('country', $businessInfo->country ?? '') == 'IM' ? 'selected' : '' }}>Isle of Man</option>
                                        <option value="IL" {{ old('country', $businessInfo->country ?? '') == 'IL' ? 'selected' : '' }}>Israel</option>
                                        <option value="IT" {{ old('country', $businessInfo->country ?? '') == 'IT' ? 'selected' : '' }}>Italy</option>
                                        <option value="JM" {{ old('country', $businessInfo->country ?? '') == 'JM' ? 'selected' : '' }}>Jamaica</option>
                                        <option value="JP" {{ old('country', $businessInfo->country ?? '') == 'JP' ? 'selected' : '' }}>Japan</option>
                                        <option value="JE" {{ old('country', $businessInfo->country ?? '') == 'JE' ? 'selected' : '' }}>Jersey</option>
                                        <option value="JO" {{ old('country', $businessInfo->country ?? '') == 'JO' ? 'selected' : '' }}>Jordan</option>
                                        <option value="KZ" {{ old('country', $businessInfo->country ?? '') == 'KZ' ? 'selected' : '' }}>Kazakhstan</option>
                                        <option value="KE" {{ old('country', $businessInfo->country ?? '') == 'KE' ? 'selected' : '' }}>Kenya</option>
                                        <option value="KI" {{ old('country', $businessInfo->country ?? '') == 'KI' ? 'selected' : '' }}>Kiribati</option>
                                        <option value="KP" {{ old('country', $businessInfo->country ?? '') == 'KP' ? 'selected' : '' }}>Korea, Democratic People's Republic of</option>
                                        <option value="KR" {{ old('country', $businessInfo->country ?? '') == 'KR' ? 'selected' : '' }}>Korea, Republic of</option>
                                        <option value="KW" {{ old('country', $businessInfo->country ?? '') == 'KW' ? 'selected' : '' }}>Kuwait</option>
                                        <option value="KG" {{ old('country', $businessInfo->country ?? '') == 'KG' ? 'selected' : '' }}>Kyrgyzstan</option>
                                        <option value="LA" {{ old('country', $businessInfo->country ?? '') == 'LA' ? 'selected' : '' }}>Lao People's Democratic Republic</option>
                                        <option value="LV" {{ old('country', $businessInfo->country ?? '') == 'LV' ? 'selected' : '' }}>Latvia</option>
                                        <option value="LB" {{ old('country', $businessInfo->country ?? '') == 'LB' ? 'selected' : '' }}>Lebanon</option>
                                        <option value="LS" {{ old('country', $businessInfo->country ?? '') == 'LS' ? 'selected' : '' }}>Lesotho</option>
                                        <option value="LR" {{ old('country', $businessInfo->country ?? '') == 'LR' ? 'selected' : '' }}>Liberia</option>
                                        <option value="LY" {{ old('country', $businessInfo->country ?? '') == 'LY' ? 'selected' : '' }}>Libya</option>
                                        <option value="LI" {{ old('country', $businessInfo->country ?? '') == 'LI' ? 'selected' : '' }}>Liechtenstein</option>
                                        <option value="LT" {{ old('country', $businessInfo->country ?? '') == 'LT' ? 'selected' : '' }}>Lithuania</option>
                                        <option value="LU" {{ old('country', $businessInfo->country ?? '') == 'LU' ? 'selected' : '' }}>Luxembourg</option>
                                        <option value="MO" {{ old('country', $businessInfo->country ?? '') == 'MO' ? 'selected' : '' }}>Macao</option>
                                        <option value="MK" {{ old('country', $businessInfo->country ?? '') == 'MK' ? 'selected' : '' }}>Macedonia, the former Yugoslav Republic of</option>
                                        <option value="MG" {{ old('country', $businessInfo->country ?? '') == 'MG' ? 'selected' : '' }}>Madagascar</option>
                                        <option value="MW" {{ old('country', $businessInfo->country ?? '') == 'MW' ? 'selected' : '' }}>Malawi</option>
                                        <option value="MY" {{ old('country', $businessInfo->country ?? '') == 'MY' ? 'selected' : '' }}>Malaysia</option>
                                        <option value="MV" {{ old('country', $businessInfo->country ?? '') == 'MV' ? 'selected' : '' }}>Maldives</option>
                                        <option value="ML" {{ old('country', $businessInfo->country ?? '') == 'ML' ? 'selected' : '' }}>Mali</option>
                                        <option value="MT" {{ old('country', $businessInfo->country ?? '') == 'MT' ? 'selected' : '' }}>Malta</option>
                                        <option value="MH" {{ old('country', $businessInfo->country ?? '') == 'MH' ? 'selected' : '' }}>Marshall Islands</option>
                                        <option value="MQ" {{ old('country', $businessInfo->country ?? '') == 'MQ' ? 'selected' : '' }}>Martinique</option>
                                        <option value="MR" {{ old('country', $businessInfo->country ?? '') == 'MR' ? 'selected' : '' }}>Mauritania</option>
                                        <option value="MU" {{ old('country', $businessInfo->country ?? '') == 'MU' ? 'selected' : '' }}>Mauritius</option>
                                        <option value="YT" {{ old('country', $businessInfo->country ?? '') == 'YT' ? 'selected' : '' }}>Mayotte</option>
                                        <option value="MX" {{ old('country', $businessInfo->country ?? '') == 'MX' ? 'selected' : '' }}>Mexico</option>
                                        <option value="FM" {{ old('country', $businessInfo->country ?? '') == 'FM' ? 'selected' : '' }}>Micronesia, Federated States of</option>
                                        <option value="MD" {{ old('country', $businessInfo->country ?? '') == 'MD' ? 'selected' : '' }}>Moldova, Republic of</option>
                                        <option value="MC" {{ old('country', $businessInfo->country ?? '') == 'MC' ? 'selected' : '' }}>Monaco</option>
                                        <option value="MN" {{ old('country', $businessInfo->country ?? '') == 'MN' ? 'selected' : '' }}>Mongolia</option>
                                        <option value="ME" {{ old('country', $businessInfo->country ?? '') == 'ME' ? 'selected' : '' }}>Montenegro</option>
                                        <option value="MS" {{ old('country', $businessInfo->country ?? '') == 'MS' ? 'selected' : '' }}>Montserrat</option>
                                        <option value="MA" {{ old('country', $businessInfo->country ?? '') == 'MA' ? 'selected' : '' }}>Morocco</option>
                                        <option value="MZ" {{ old('country', $businessInfo->country ?? '') == 'MZ' ? 'selected' : '' }}>Mozambique</option>
                                        <option value="MM" {{ old('country', $businessInfo->country ?? '') == 'MM' ? 'selected' : '' }}>Myanmar</option>
                                        <option value="NA" {{ old('country', $businessInfo->country ?? '') == 'NA' ? 'selected' : '' }}>Namibia</option>
                                        <option value="NR" {{ old('country', $businessInfo->country ?? '') == 'NR' ? 'selected' : '' }}>Nauru</option>
                                        <option value="NP" {{ old('country', $businessInfo->country ?? '') == 'NP' ? 'selected' : '' }}>Nepal</option>
                                        <option value="NL" {{ old('country', $businessInfo->country ?? '') == 'NL' ? 'selected' : '' }}>Netherlands</option>
                                        <option value="NC" {{ old('country', $businessInfo->country ?? '') == 'NC' ? 'selected' : '' }}>New Caledonia</option>
                                        <option value="NZ" {{ old('country', $businessInfo->country ?? '') == 'NZ' ? 'selected' : '' }}>New Zealand</option>
                                        <option value="NI" {{ old('country', $businessInfo->country ?? '') == 'NI' ? 'selected' : '' }}>Nicaragua</option>
                                        <option value="NE" {{ old('country', $businessInfo->country ?? '') == 'NE' ? 'selected' : '' }}>Niger</option>
                                        <option value="NG" {{ old('country', $businessInfo->country ?? '') == 'NG' ? 'selected' : '' }}>Nigeria</option>
                                        <option value="NU" {{ old('country', $businessInfo->country ?? '') == 'NU' ? 'selected' : '' }}>Niue</option>
                                        <option value="NF" {{ old('country', $businessInfo->country ?? '') == 'NF' ? 'selected' : '' }}>Norfolk Island</option>
                                        <option value="MP" {{ old('country', $businessInfo->country ?? '') == 'MP' ? 'selected' : '' }}>Northern Mariana Islands</option>
                                        <option value="NO" {{ old('country', $businessInfo->country ?? '') == 'NO' ? 'selected' : '' }}>Norway</option>
                                        <option value="OM" {{ old('country', $businessInfo->country ?? '') == 'OM' ? 'selected' : '' }}>Oman</option>
                                        <option value="PK" {{ old('country', $businessInfo->country ?? '') == 'PK' ? 'selected' : '' }}>Pakistan</option>
                                        <option value="PW" {{ old('country', $businessInfo->country ?? '') == 'PW' ? 'selected' : '' }}>Palau</option>
                                        <option value="PS" {{ old('country', $businessInfo->country ?? '') == 'PS' ? 'selected' : '' }}>Palestinian Territory, Occupied</option>
                                        <option value="PA" {{ old('country', $businessInfo->country ?? '') == 'PA' ? 'selected' : '' }}>Panama</option>
                                        <option value="PG" {{ old('country', $businessInfo->country ?? '') == 'PG' ? 'selected' : '' }}>Papua New Guinea</option>
                                        <option value="PY" {{ old('country', $businessInfo->country ?? '') == 'PY' ? 'selected' : '' }}>Paraguay</option>
                                        <option value="PE" {{ old('country', $businessInfo->country ?? '') == 'PE' ? 'selected' : '' }}>Peru</option>
                                        <option value="PH" {{ old('country', $businessInfo->country ?? '') == 'PH' ? 'selected' : '' }}>Philippines</option>
                                        <option value="PN" {{ old('country', $businessInfo->country ?? '') == 'PN' ? 'selected' : '' }}>Pitcairn</option>
                                        <option value="PL" {{ old('country', $businessInfo->country ?? '') == 'PL' ? 'selected' : '' }}>Poland</option>
                                        <option value="PT" {{ old('country', $businessInfo->country ?? '') == 'PT' ? 'selected' : '' }}>Portugal</option>
                                        <option value="PR" {{ old('country', $businessInfo->country ?? '') == 'PR' ? 'selected' : '' }}>Puerto Rico</option>
                                        <option value="QA" {{ old('country', $businessInfo->country ?? '') == 'QA' ? 'selected' : '' }}>Qatar</option>
                                        <option value="RE" {{ old('country', $businessInfo->country ?? '') == 'RE' ? 'selected' : '' }}>Réunion</option>
                                        <option value="RO" {{ old('country', $businessInfo->country ?? '') == 'RO' ? 'selected' : '' }}>Romania</option>
                                        <option value="RU" {{ old('country', $businessInfo->country ?? '') == 'RU' ? 'selected' : '' }}>Russian Federation</option>
                                        <option value="RW" {{ old('country', $businessInfo->country ?? '') == 'RW' ? 'selected' : '' }}>Rwanda</option>
                                        <option value="BL" {{ old('country', $businessInfo->country ?? '') == 'BL' ? 'selected' : '' }}>Saint Barthélemy</option>
                                        <option value="SH" {{ old('country', $businessInfo->country ?? '') == 'SH' ? 'selected' : '' }}>Saint Helena, Ascension and Tristan da Cunha</option>
                                        <option value="KN" {{ old('country', $businessInfo->country ?? '') == 'KN' ? 'selected' : '' }}>Saint Kitts and Nevis</option>
                                        <option value="LC" {{ old('country', $businessInfo->country ?? '') == 'LC' ? 'selected' : '' }}>Saint Lucia</option>
                                        <option value="MF" {{ old('country', $businessInfo->country ?? '') == 'MF' ? 'selected' : '' }}>Saint Martin (French part)</option>
                                        <option value="PM" {{ old('country', $businessInfo->country ?? '') == 'PM' ? 'selected' : '' }}>Saint Pierre and Miquelon</option>
                                        <option value="VC" {{ old('country', $businessInfo->country ?? '') == 'VC' ? 'selected' : '' }}>Saint Vincent and the Grenadines</option>
                                        <option value="WS" {{ old('country', $businessInfo->country ?? '') == 'WS' ? 'selected' : '' }}>Samoa</option>
                                        <option value="SM" {{ old('country', $businessInfo->country ?? '') == 'SM' ? 'selected' : '' }}>San Marino</option>
                                        <option value="ST" {{ old('country', $businessInfo->country ?? '') == 'ST' ? 'selected' : '' }}>Sao Tome and Principe</option>
                                        <option value="SA" {{ old('country', $businessInfo->country ?? '') == 'SA' ? 'selected' : '' }}>Saudi Arabia</option>
                                        <option value="SN" {{ old('country', $businessInfo->country ?? '') == 'SN' ? 'selected' : '' }}>Senegal</option>
                                        <option value="RS" {{ old('country', $businessInfo->country ?? '') == 'RS' ? 'selected' : '' }}>Serbia</option>
                                        <option value="SC" {{ old('country', $businessInfo->country ?? '') == 'SC' ? 'selected' : '' }}>Seychelles</option>
                                        <option value="SL" {{ old('country', $businessInfo->country ?? '') == 'SL' ? 'selected' : '' }}>Sierra Leone</option>
                                        <option value="SG" {{ old('country', $businessInfo->country ?? '') == 'SG' ? 'selected' : '' }}>Singapore</option>
                                        <option value="SX" {{ old('country', $businessInfo->country ?? '') == 'SX' ? 'selected' : '' }}>Sint Maarten (Dutch part)</option>
                                        <option value="SK" {{ old('country', $businessInfo->country ?? '') == 'SK' ? 'selected' : '' }}>Slovakia</option>
                                        <option value="SI" {{ old('country', $businessInfo->country ?? '') == 'SI' ? 'selected' : '' }}>Slovenia</option>
                                        <option value="SB" {{ old('country', $businessInfo->country ?? '') == 'SB' ? 'selected' : '' }}>Solomon Islands</option>
                                        <option value="SO" {{ old('country', $businessInfo->country ?? '') == 'SO' ? 'selected' : '' }}>Somalia</option>
                                        <option value="ZA" {{ old('country', $businessInfo->country ?? '') == 'ZA' ? 'selected' : '' }}>South Africa</option>
                                        <option value="GS" {{ old('country', $businessInfo->country ?? '') == 'GS' ? 'selected' : '' }}>South Georgia and the South Sandwich Islands</option>
                                        <option value="SS" {{ old('country', $businessInfo->country ?? '') == 'SS' ? 'selected' : '' }}>South Sudan</option>
                                        <option value="ES" {{ old('country', $businessInfo->country ?? '') == 'ES' ? 'selected' : '' }}>Spain</option>
                                        <option value="LK" {{ old('country', $businessInfo->country ?? '') == 'LK' ? 'selected' : '' }}>Sri Lanka</option>
                                        <option value="SD" {{ old('country', $businessInfo->country ?? '') == 'SD' ? 'selected' : '' }}>Sudan</option>
                                        <option value="SR" {{ old('country', $businessInfo->country ?? '') == 'SR' ? 'selected' : '' }}>Suriname</option>
                                        <option value="SJ" {{ old('country', $businessInfo->country ?? '') == 'SJ' ? 'selected' : '' }}>Svalbard and Jan Mayen</option>
                                        <option value="SZ" {{ old('country', $businessInfo->country ?? '') == 'SZ' ? 'selected' : '' }}>Swaziland</option>
                                        <option value="SE" {{ old('country', $businessInfo->country ?? '') == 'SE' ? 'selected' : '' }}>Sweden</option>
                                        <option value="CH" {{ old('country', $businessInfo->country ?? '') == 'CH' ? 'selected' : '' }}>Switzerland</option>
                                        <option value="SY" {{ old('country', $businessInfo->country ?? '') == 'SY' ? 'selected' : '' }}>Syrian Arab Republic</option>
                                        <option value="TW" {{ old('country', $businessInfo->country ?? '') == 'TW' ? 'selected' : '' }}>Taiwan, Province of China</option>
                                        <option value="TJ" {{ old('country', $businessInfo->country ?? '') == 'TJ' ? 'selected' : '' }}>Tajikistan</option>
                                        <option value="TZ" {{ old('country', $businessInfo->country ?? '') == 'TZ' ? 'selected' : '' }}>Tanzania, United Republic of</option>
                                        <option value="TH" {{ old('country', $businessInfo->country ?? '') == 'TH' ? 'selected' : '' }}>Thailand</option>
                                        <option value="TL" {{ old('country', $businessInfo->country ?? '') == 'TL' ? 'selected' : '' }}>Timor-Leste</option>
                                        <option value="TG" {{ old('country', $businessInfo->country ?? '') == 'TG' ? 'selected' : '' }}>Togo</option>
                                        <option value="TK" {{ old('country', $businessInfo->country ?? '') == 'TK' ? 'selected' : '' }}>Tokelau</option>
                                        <option value="TO" {{ old('country', $businessInfo->country ?? '') == 'TO' ? 'selected' : '' }}>Tonga</option>
                                        <option value="TT" {{ old('country', $businessInfo->country ?? '') == 'TT' ? 'selected' : '' }}>Trinidad and Tobago</option>
                                        <option value="TN" {{ old('country', $businessInfo->country ?? '') == 'TN' ? 'selected' : '' }}>Tunisia</option>
                                        <option value="TR" {{ old('country', $businessInfo->country ?? '') == 'TR' ? 'selected' : '' }}>Turkey</option>
                                        <option value="TM" {{ old('country', $businessInfo->country ?? '') == 'TM' ? 'selected' : '' }}>Turkmenistan</option>
                                        <option value="TC" {{ old('country', $businessInfo->country ?? '') == 'TC' ? 'selected' : '' }}>Turks and Caicos Islands</option>
                                        <option value="TV" {{ old('country', $businessInfo->country ?? '') == 'TV' ? 'selected' : '' }}>Tuvalu</option>
                                        <option value="UG" {{ old('country', $businessInfo->country ?? '') == 'UG' ? 'selected' : '' }}>Uganda</option>
                                        <option value="UA" {{ old('country', $businessInfo->country ?? '') == 'UA' ? 'selected' : '' }}>Ukraine</option>
                                        <option value="AE" {{ old('country', $businessInfo->country ?? '') == 'AE' ? 'selected' : '' }}>United Arab Emirates</option>
                                        <option value="GB" {{ old('country', $businessInfo->country ?? '') == 'GB' ? 'selected' : '' }}>United Kingdom</option>
                                        <option value="US" {{ old('country', $businessInfo->country ?? '') == 'US' ? 'selected' : '' }}>United States</option>
                                        <option value="UM" {{ old('country', $businessInfo->country ?? '') == 'UM' ? 'selected' : '' }}>United States Minor Outlying Islands</option>
                                        <option value="UY" {{ old('country', $businessInfo->country ?? '') == 'UY' ? 'selected' : '' }}>Uruguay</option>
                                        <option value="UZ" {{ old('country', $businessInfo->country ?? '') == 'UZ' ? 'selected' : '' }}>Uzbekistan</option>
                                        <option value="VU" {{ old('country', $businessInfo->country ?? '') == 'VU' ? 'selected' : '' }}>Vanuatu</option>
                                        <option value="VE" {{ old('country', $businessInfo->country ?? '') == 'VE' ? 'selected' : '' }}>Venezuela, Bolivarian Republic of</option>
                                        <option value="VN" {{ old('country', $businessInfo->country ?? '') == 'VN' ? 'selected' : '' }}>Viet Nam</option>
                                        <option value="VG" {{ old('country', $businessInfo->country ?? '') == 'VG' ? 'selected' : '' }}>Virgin Islands, British</option>
                                        <option value="VI" {{ old('country', $businessInfo->country ?? '') == 'VI' ? 'selected' : '' }}>Virgin Islands, U.S.</option>
                                        <option value="WF" {{ old('country', $businessInfo->country ?? '') == 'WF' ? 'selected' : '' }}>Wallis and Futuna</option>
                                        <option value="EH" {{ old('country', $businessInfo->country ?? '') == 'EH' ? 'selected' : '' }}>Western Sahara</option>
                                        <option value="YE" {{ old('country', $businessInfo->country ?? '') == 'YE' ? 'selected' : '' }}>Yemen</option>
                                        <option value="ZM" {{ old('country', $businessInfo->country ?? '') == 'ZM' ? 'selected' : '' }}>Zambia</option>
                                        <option value="ZW" {{ old('country', $businessInfo->country ?? '') == 'ZW' ? 'selected' : '' }}>Zimbabwe</option>
                                    </select>
                                    <span class="text-xs text-[#1F1F1F]">If you are a company, We will verify the country where your company is incorporated.</span>
                                </div>
                                <hr class="col-span-1 xl:col-span-2 border-0 border-b border-[#D6D6D6]">
                                <div class="col-span-1 xl:col-span-2 flex flex-col xl:flex-row gap-2">
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="business_role" class="text-xs xl:text-sm text-[#1F1F1F]">Business Role</label>
                                        <select class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] cursor-pointer transition duration-150 ease-in-out" name="business_role" id="business_role" placeholder="Business Type" autocomplete="off" required>
                                            <option value="0" {{ old('business_role', $businessInfo->business_role ?? '') == '0' ? 'selected' : '' }}>Artist</option>
                                            <option value="1" {{ old('business_role', $businessInfo->business_role ?? '') == '1' ? 'selected' : '' }}>Music Producer</option>
                                            <option value="2" {{ old('business_role', $businessInfo->business_role ?? '') == '2' ? 'selected' : '' }}>Record Label</option>
                                            <option value="3" {{ old('business_role', $businessInfo->business_role ?? '') == '3' ? 'selected' : '' }}>Distributor</option>
                                            <option value="4" {{ old('business_role', $businessInfo->business_role ?? '') == '4' ? 'selected' : '' }}>Music Publisher</option>
                                        </select>
                                    </div>
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="business_name" class="text-xs xl:text-sm text-[#1F1F1F]">Business Name</label>
                                        <input type="text" class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out" name="business_name" id="business_name" placeholder="Business Name" autocomplete="off" value="{{ old('business_name', $businessInfo->business_name ?? '') }}" required>
                                        <span class="text-xs text-[#1F1F1F]">If you are an Artist or Music Producer, use your stage name. If you represent a company (such as a Record Label, Music Distributor or Music Publisher), use the legal name recognized in the country of origin, complete with the type of business (such as Ltd., Inc., PT., Pvt. Ltd, etc).</span>
                                    </div>
                                </div>
                                <hr class="col-span-1 xl:col-span-2 border-0 border-b border-[#D6D6D6]">
                                <div class="col-span-1 xl:col-span-2 flex flex-col xl:flex-row gap-2">
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="business_website" class="text-xs xl:text-sm text-[#1F1F1F]">Business Website</label>
                                        <input type="url" class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out" name="business_website" id="business_website" placeholder="Business Website" autocomplete="off" value="{{ old('business_website', $businessInfo->business_website ?? '') }}">
                                    </div>
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="business_youtube" class="text-xs xl:text-sm text-[#1F1F1F]">Business Channel on YouTube</label>
                                        <input type="url" class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out" name="business_youtube" id="business_youtube" placeholder="Business Channel on YouTube" autocomplete="off" value="{{ old('business_youtube', $businessInfo->business_youtube ?? '') }}">
                                        <span class="text-xs text-[#1F1F1F]">Use your Business Channel link on YouTube.</span>
                                    </div>
                                </div>
                                <div class="col-span-1 xl:col-span-2 flex flex-col xl:flex-row gap-2">
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="business_instagram" class="text-xs xl:text-sm text-[#1F1F1F]">Business Account on Instagram</label>
                                        <input type="url" class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out" name="business_instagram" id="business_instagram" placeholder="Business Account on Instagram" autocomplete="off" value="{{ old('business_instagram', $businessInfo->business_instagram ?? '') }}">
                                        <span class="text-xs text-[#1F1F1F]">Use your Business Account link on Instagram.</span>
                                    </div>
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="business_facebook" class="text-xs xl:text-sm text-[#1F1F1F]">Business Account on Facebook</label>
                                        <input type="url" class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out" name="business_facebook" id="business_facebook" placeholder="Business Account on Facebook" autocomplete="off" value="{{ old('business_facebook', $businessInfo->business_facebook ?? '') }}">
                                        <span class="text-xs text-[#1F1F1F]">Use your Business Account link on Facebook.</span>
                                    </div>
                                </div>
                                <div class="col-span-1 xl:col-span-2 flex flex-col xl:flex-row gap-2">
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="business_x" class="text-xs xl:text-sm text-[#1F1F1F]">Business Account on X</label>
                                        <input type="url" class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out" name="business_x" id="business_x" placeholder="Business Account on X" autocomplete="off" value="{{ old('business_x', $businessInfo->business_x ?? '') }}">
                                        <span class="text-xs text-[#1F1F1F]">Use your Business Account link on X.</span>
                                    </div>
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="business_tiktok" class="text-xs xl:text-sm text-[#1F1F1F]">Business Account on TikTok</label>
                                        <input type="url" class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out" name="business_tiktok" id="business_tiktok" placeholder="Business Account on TikTok" autocomplete="off" value="{{ old('business_tiktok', $businessInfo->business_tiktok ?? '') }}">
                                        <span class="text-xs text-[#1F1F1F]">Use your Business Account link on TikTok.</span>
                                    </div>
                                </div>
                                <div class="cols-span-1 xl:col-span-2 w-full flex flex-col gap-2">
                                    <div class="flex justify-start items-center">
                                        <button type="submit" class="rounded-sm px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] cursor-pointer transition duration-150 ease-in-out">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-4">
                        <div class="inline-flex justify-between items-center">
                            <span class="font-medium">Security Information</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-lock"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                        </div>
                        <form method="post" action="{{ route('password.update') }}">
                            @csrf
                            @method('put')
                            <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
                                <div class="col-span-1 xl:col-span-2 w-full flex flex-col gap-2 relative">
                                    <label for="current_password" class="text-xs xl:text-sm text-[#1F1F1F]">Current Password</label>
                                    <div class="relative w-full">
                                        <input type="password" class="bg-[#F5F5F5] w-full ps-4 pe-14 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out" name="current_password" id="current_password" placeholder="Old Password" autocomplete="off" required>
                                        <button type="button" class="absolute right-0 mx-4 p-1 top-1/2 transform -translate-y-1/2 rounded-full text-[#302995] bg-transparent hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 transition duration-150 ease-in-out cursor-pointer"
                                            onclick="let pwd = document.getElementById('current_password'); let eyeOpen = this.children[0]; let eyeClosed = this.children[1]; pwd.type = pwd.type === 'password' ? 'text' : 'password'; eyeOpen.classList.toggle('hidden'); eyeClosed.classList.toggle('hidden');">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye hidden">
                                                <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/>
                                                <circle cx="12" cy="12" r="3"/>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-closed">
                                                <path d="m15 18-.722-3.25"/>
                                                <path d="M2 8a10.645 10.645 0 0 0 20 0"/>
                                                <path d="m20 15-1.726-2.05"/>
                                                <path d="m4 15 1.726-2.05"/>
                                                <path d="m9 18 .722-3.25"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <hr class="col-span-1 xl:col-span-2 border-0 border-b border-[#D6D6D6]">
                                <div class="col-span-1 xl:col-span-2 flex flex-col xl:flex-row gap-2">
                                    <div class="w-full flex flex-col gap-2 relative">
                                        <label for="password" class="text-xs xl:text-sm text-[#1F1F1F]">New Password</label>
                                        <div class="relative w-full">
                                            <input type="password" class="bg-[#F5F5F5] w-full ps-4 pe-14 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out" name="password" id="password" placeholder="New Password" autocomplete="off" required>
                                            <button type="button" class="absolute right-0 mx-4 p-1 top-1/2 transform -translate-y-1/2 rounded-full text-[#302995] bg-transparent hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 transition duration-150 ease-in-out cursor-pointer"
                                                onclick="let pwd = document.getElementById('password'); let eyeOpen = this.children[0]; let eyeClosed = this.children[1]; pwd.type = pwd.type === 'password' ? 'text' : 'password'; eyeOpen.classList.toggle('hidden'); eyeClosed.classList.toggle('hidden');">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye hidden">
                                                    <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/>
                                                    <circle cx="12" cy="12" r="3"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-closed">
                                                    <path d="m15 18-.722-3.25"/>
                                                    <path d="M2 8a10.645 10.645 0 0 0 20 0"/>
                                                    <path d="m20 15-1.726-2.05"/>
                                                    <path d="m4 15 1.726-2.05"/>
                                                    <path d="m9 18 .722-3.25"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="w-full flex flex-col gap-2 relative">
                                        <label for="password_confirmation" class="text-xs xl:text-sm text-[#1F1F1F]">Confirm Password</label>
                                        <div class="relative w-full">
                                            <input type="password" class="bg-[#F5F5F5] w-full ps-4 pe-14 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out" name="password_confirmation" id="password_confirmation" placeholder="Confirm New Password" autocomplete="off" required>
                                            <button type="button" class="absolute right-0 mx-4 p-1 top-1/2 transform -translate-y-1/2 rounded-full text-[#302995] bg-transparent hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 transition duration-150 ease-in-out cursor-pointer"
                                                onclick="let pwd = document.getElementById('password_confirmation'); let eyeOpen = this.children[0]; let eyeClosed = this.children[1]; pwd.type = pwd.type === 'password' ? 'text' : 'password'; eyeOpen.classList.toggle('hidden'); eyeClosed.classList.toggle('hidden');">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye hidden">
                                                    <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/>
                                                    <circle cx="12" cy="12" r="3"/>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-closed">
                                                    <path d="m15 18-.722-3.25"/>
                                                    <path d="M2 8a10.645 10.645 0 0 0 20 0"/>
                                                    <path d="m20 15-1.726-2.05"/>
                                                    <path d="m4 15 1.726-2.05"/>
                                                    <path d="m9 18 .722-3.25"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="cols-span-1 xl:col-span-2 w-full flex flex-col gap-2">
                                    <div class="flex justify-start items-center">
                                        <button type="submit" class="rounded-sm px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] cursor-pointer transition duration-150 ease-in-out">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
