@extends('layouts.app')

@section('title', ' Add Bootcamp')

@section('content')

    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-12">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Add Bootcamp
                    </h2>
                    <p class="text-sm text-gray-400">
                        Upload the Bootcamp
                    </p>
                </div>
            </div>
        </div>

        <!-- breadcrumb -->
        <nav class="mx-10 mt-8 text-sm" aria-label="Breadcrumb">
            <ol class="inline-flex p-0 list-none">
                <li class="flex items-center">
                    <a href="{{ route('admin.bootcamp.index') }}" class="text-gray-400">My Bootcamps</a>
                    <svg class="w-3 h-3 mx-3 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <p class="font-medium">Add Bootcamp</p>
                </li>
            </ol>
        </nav>

        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-2 py-2 mt-2 bg-white rounded-xl">

                        <form action="{{ route('admin.bootcamp.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="">
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">

                                        <div class="col-span-6">
                                            <label for="users" class="block mb-3 font-medium text-gray-700 text-md">Mentor Bootcamp</label>
                                            <select name="mentor_id" id="users" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                                <option selected disabled>Select Mentor </option>
                                                @foreach ($users as $key => $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                            </select>
{{--                                            <input placeholder="Bootcamp apa yang ingin kamu tawarkan?" type="text" name="title" id="title" autocomplete="title" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('title') }}" required>--}}

                                            @if ($errors->has('title'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('title') }}</p>
                                            @endif

                                        </div>

                                        <div class="col-span-6">
                                            <label for="title" class="block mb-3 font-medium text-gray-700 text-md">Judul Bootcamp</label>

                                            <input placeholder="Bootcamp apa yang ingin kamu tawarkan?" type="text" name="title" id="title" autocomplete="title" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('title') }}" required>

                                            @if ($errors->has('title'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('title') }}</p>
                                            @endif

                                        </div>

                                        <div class="col-span-6">
                                            <label for="description" class="block mb-3 font-medium text-gray-700 text-md">Deskripsi Bootcamp</label>

                                            <input placeholder="Jelaskan Bootcamp apa yang ditawarkan?" type="text" name="description" id="description" autocomplete="description" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('description') }}" required>

                                            @if ($errors->has('description'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('description') }}</p>
                                            @endif
                                        </div>

                                        <div class="col-span-6">
                                            <label for="thumbnail_bootcamp" class="block mb-3 font-medium text-gray-700 text-md">Thumbnail Bootcmap</label>

                                            <input placeholder="thumbnail_bootcamp" type="file" name="thumbnail_bootcamp" id="thumbnail_bootcamp" autocomplete="thumbnail_bootcamp" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">

                                            @if ($errors->has('thumbnail_bootcamp'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('thumbnail_bootcamp') }}</p>
                                            @endif
                                        </div>

                                        <div class="col-span-6">
                                            <label for="title_study_case" class="block mb-3 font-medium text-gray-700 text-md">Judul Study Case <span class="text-gray-400">(Optional)</span></label>

                                            <input placeholder="Study Case Bootcamp" type="text" name="title_study_case" id="title_study_case" autocomplete="title_study_case" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('title_study_case') }}">

                                            @if ($errors->has('title_study_case'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('title_study_case') }}</p>
                                            @endif

                                        </div>

                                        <div class="col-span-6">
                                            <label for="description_study_case" class="block mb-3 font-medium text-gray-700 text-md">Deskripsi Study Case <span class="text-gray-400">(Optional)</span></label>

                                            <input placeholder="Jelaskan Bootcamp ditawarkan?" type="text" name="description_study_case" id="description_study_case" autocomplete="description_study_case" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('description_study_case') }}">

                                            @if ($errors->has('description_study_case'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('description_study_case') }}</p>
                                            @endif
                                        </div>

                                        <div class="col-span-6">
                                            <label for="thumbnail_bootcamp_study_case" class="block mb-3 font-medium text-gray-700 text-md">Thumbnail Study Case <span class="text-gray-400">(Optional)</span></label>

                                            <input placeholder="thumbnail_bootcamp_study_case" type="file" name="thumbnail_bootcamp_study_case" id="thumbnail_bootcamp_study_case" autocomplete="thumbnail_bootcamp_study_case" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">

                                            @if ($errors->has('thumbnail_bootcamp_study_case'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('thumbnail_bootcamp_study_case') }}</p>
                                            @endif
                                        </div>

                                        <div class="col-span-6">
                                            <label for="benefit-bootcamps" class="block mb-2 font-medium text-gray-700 text-md">Keunggulan Bootcamp</label>

                                            <p class="block mb-3 text-sm text-gray-700">
                                                Hal apa aja yang didapakan dari Bootcamp?
                                            </p>

                                            <input placeholder="Benefit Bootcamp" type="text" name="benefit-bootcamps[]" id="benefit-bootcamps" autocomplete="benefit-bootcamps" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('benefit-bootcamps[]') }}" required>

                                            <input placeholder="Benefit Bootcamp" type="text" name="benefit-bootcamps[]" id="benefit-bootcamps" autocomplete="benefit-bootcamps" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('benefit-bootcamps[]') }}" required>

                                            <input placeholder="Benefit Bootcamp" type="text" name="benefit-bootcamps[]" id="benefit-bootcamps" autocomplete="benefit-bootcamps" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('benefit-bootcamps[]') }}" required>

                                            <div id="newAdvantageBootcampRow"></div>

                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addAdvantageBootcampRow">
                                                Tambahkan Keunggulan Bootcamp +
                                            </button>
                                        </div>

{{--                                        <div class="col-span-6 -mb-6">--}}
{{--                                            <label for="estimation & revision" class="block mb-3 font-medium text-gray-700 text-md">Estimasi Service & Jumlah Revisi</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="col-span-6 sm:col-span-3">--}}
{{--                                            <select id="delivery_time" name="delivery_time" autocomplete="delivery_time" class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>--}}
{{--                                                <option>Butuh Berapa hari service kamu selesai?</option>--}}
{{--                                                <option value="2">2 Hari</option>--}}
{{--                                                <option value="4">4 Hari</option>--}}
{{--                                                <option value="8">8 Hari</option>--}}
{{--                                                <option value="16">16 Hari</option>--}}
{{--                                                <option value="32">32 Hari</option>--}}
{{--                                            </select>--}}

{{--                                            @if ($errors->has('delivery_time'))--}}
{{--                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('delivery_time') }}</p>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}

{{--                                        <div class="col-span-6 sm:col-span-3">--}}
{{--                                            <select id="revision_limit" name="revision_limit" autocomplete="revision_limit" class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>--}}
{{--                                                <option>Maksimal Revisi service kamu</option>--}}
{{--                                                <option value="2">2 Revisi</option>--}}
{{--                                                <option value="5">5 Revisi</option>--}}
{{--                                                <option value="7">7 Revisi</option>--}}
{{--                                                <option value="10">10 Revisi</option>--}}
{{--                                                <option value="12">12 Revisi</option>--}}
{{--                                            </select>--}}

{{--                                            @if ($errors->has('revision_limit'))--}}
{{--                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('revision_limit') }}</p>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}

{{--                                        <div class="col-span-6">--}}
{{--                                            <label for="thumbnail-service" class="block mb-3 font-medium text-gray-700 text-md">Thumbnail Service Feeds</label>--}}

{{--                                            <input placeholder="Thumbnail 1" type="file" name="thumbnail[]" id="thumbnail" autocomplete="thumbnail" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">--}}

{{--                                            <input placeholder="Thumbnail 2" type="file" name="thumbnail[]" id="thumbnail" autocomplete="thumbnail" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">--}}

{{--                                            <input placeholder="Thumbnail 3" type="file" name="thumbnail[]" id="thumbnail" autocomplete="thumbnail" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">--}}

{{--                                            @if ($errors->has('thumbnail[]'))--}}
{{--                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('thumbnail') }}</p>--}}
{{--                                            @endif--}}

{{--                                            <div id="newThumbnailRow"></div>--}}

{{--                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addThumbnailRow">--}}
{{--                                                Tambahkan Gambar +--}}
{{--                                            </button>--}}
{{--                                        </div>--}}

                                        <div class="col-span-6">
                                            <label for="advantage-bootcamps" class="block mb-3 font-medium text-gray-700 text-md">Keunggulan Bootcamp</label>

                                            <input placeholder="Keunggulan Bootcamp" type="text" name="advantage-bootcamps[]" id="advantage-bootcamps" autocomplete="advantage-bootcamps" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('advantage-bootcamps[]') }}" required>

                                            <input placeholder="Keunggulan Bootcamp" type="text" name="advantage-bootcamps[]" id="advantage-bootcamps" autocomplete="advantage-bootcamps" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('advantage-bootcamps[]') }}" required>

                                            <input placeholder="Keunggulan Bootcamp" type="text" name="advantage-bootcamps[]" id="advantage-bootcamps" autocomplete="advantage-bootcamps" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('advantage-bootcamps[]') }}" required>

                                            <div id="newAdvantagesRow"></div>

                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addAdvantagesRow">
                                                Tambahkan Keunggulan +
                                            </button>
                                        </div>

{{--                                        <div class="col-span-6">--}}
{{--                                            <label for="note" class="block mb-3 font-medium text-gray-700 text-md">Note <span class="text-gray-400">(Optional)</span></label>--}}
{{--                                            <input placeholder="Hal yang ingin disampaikan oleh kamu?" type="text" name="note" id="note" autocomplete="note" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('note') }}">--}}

{{--                                            @if ($errors->has('note'))--}}
{{--                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('note') }}</p>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}

{{--                                        <div class="col-span-6">--}}
{{--                                            <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md">Tagline <span class="text-gray-400">(Optional)</span></label>--}}

{{--                                            <div id="newTaglineRow"></div>--}}

{{--                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addTaglineRow">--}}
{{--                                                Tambahkan Tagline +--}}
{{--                                            </button>--}}
{{--                                        </div>--}}

                                        <div class="col-span-6">
                                            <label for="registration" class="block mb-3 font-medium text-gray-700 text-md">Waktu Bootcamp</label>

                                            <input placeholder="Waktu pendaftaran Bootcamp" type="text" name="registration" id="registration" autocomplete="registration" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('registration') }}" required>

                                            @if ($errors->has('registration'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('registration') }}</p>
                                            @endif

                                        </div>

                                        <div class="col-span-6">
                                            <label for="duration" class="block mb-3 font-medium text-gray-700 text-md">Durasi Bootcamp</label>

                                            <input placeholder="Durasi pelaksanaan Bootcamp" type="text" name="duration" id="duration" autocomplete="duration" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('duration') }}" required>

                                            @if ($errors->has('duration'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('duration') }}</p>
                                            @endif

                                        </div>

                                        <div class="col-span-6">
                                            <label for="media" class="block mb-3 font-medium text-gray-700 text-md">Media Bootcamp</label>

                                            <input placeholder="Media pelaksanaan Bootcamp" type="text" name="media" id="media" autocomplete="media" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('media') }}" required>

                                            @if ($errors->has('media'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('media') }}</p>
                                            @endif

                                        </div>

                                        <div class="col-span-6">
                                            <label for="schedule" class="block mb-3 font-medium text-gray-700 text-md">Schedule Mulai Bootcamp</label>

                                            <input placeholder="Tanggal dimulainya bootcamp" type="text" name="schedule" id="schedule" autocomplete="schedule" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('schedule') }}" required>

                                            @if ($errors->has('schedule'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('schedule') }}</p>
                                            @endif

                                        </div>

                                        <div class="col-span-6">
                                            <label for="participant" class="block mb-3 font-medium text-gray-700 text-md">Participant Bootcamp</label>

                                            <input placeholder="Maximal Participant Bootcamp" type="number" name="participant" id="participant" autocomplete="participant" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('participant') }}" required>

                                            @if ($errors->has('participant'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('participant') }}</p>
                                            @endif
                                        </div>

                                        <div class="col-span-6">
                                            <label for="main-materi-bootcamp" class="block mb-2 font-medium text-gray-700 text-md">Main Materi Bootcamp</label>

{{--                                            <p class="block mb-3 text-sm text-gray-700">--}}
{{--                                                Main Materi?--}}
{{--                                            </p>--}}

                                            <input placeholder="Main Materi" type="text" name="main-materi-bootcamp[]" id="main-materi-bootcamp" autocomplete="main-materi-bootcamp" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('main-materi-bootcamp[]') }}" required>


{{--                                            <input placeholder="Keunggulan Service 2" type="text" name="main-materi-bootcamp[]" id="main-materi-bootcamp" autocomplete="main-materi-bootcamp" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('main-materi-bootcamp[]') }}" required>--}}

{{--                                            <input placeholder="Keunggulan Service 3" type="text" name="main-materi-bootcamp[]" id="main-materi-bootcamp" autocomplete="main-materi-bootcamp" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('main-materi-bootcamp[]') }}" required>--}}

                                            <div id="newDetailMainMenuRow"></div>

                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addDetailMainMenuRow">
                                                Tambahkan Detail Main Materi Bootcamp +
                                            </button>

                                            <div id="newMainMateriRow"></div>
                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addMainMateriRow">
                                                Tambahkan Main Materi Bootcamp +
                                            </button>

                                        </div>

                                        <div class="col-span-6">
                                            <label for="main-materi-bootcamp" class="block mb-2 font-medium text-gray-700 text-md">Main Materi Bootcamp</label>

                                            {{--                                            <p class="block mb-3 text-sm text-gray-700">--}}
                                            {{--                                                Main Materi?--}}
                                            {{--                                            </p>--}}

                                            <input placeholder="Main Materi" type="text" name="main-materi-bootcamp[]" id="main-materi-bootcamp" autocomplete="main-materi-bootcamp" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('main-materi-bootcamp[]') }}" required>
                                            <input placeholder="Detail Main Materi Bootcmap" type="text" name="detail-materi-bootcamp[]" id="detail-materi-bootcamp" autocomplete="detail-materi-bootcamp" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                            <input placeholder="Detail Main Materi Bootcmap" type="text" name="detail-materi-bootcamp[]" id="detail-materi-bootcamp" autocomplete="detail-materi-bootcamp" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                            {{--                                            <input placeholder="Keunggulan Service 2" type="text" name="main-materi-bootcamp[]" id="main-materi-bootcamp" autocomplete="main-materi-bootcamp" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('main-materi-bootcamp[]') }}" required>--}}

                                            {{--                                            <input placeholder="Keunggulan Service 3" type="text" name="main-materi-bootcamp[]" id="main-materi-bootcamp" autocomplete="main-materi-bootcamp" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('main-materi-bootcamp[]') }}" required>--}}

                                            <div id="newDetailMainMenuRow"></div>

                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addDetailMainMenuRow">
                                                Tambahkan Detail Main Materi Bootcamp +
                                            </button>

{{--                                            <div id="newMainMateriRow"></div>--}}
{{--                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addMainMenuRow">--}}
{{--                                                Tambahkan Main Materi Bootcamp +--}}
{{--                                            </button>--}}


                                        </div>

                                        </div>

{{--                                        <div class="col-span-6">--}}
{{--                                            <label for="main-materi-bootcamp" class="block mb-2 font-medium text-gray-700 text-md">Main Materi Bootcamp</label>--}}

{{--                                            --}}{{--                                            <p class="block mb-3 text-sm text-gray-700">--}}
{{--                                            --}}{{--                                                Main Materi?--}}
{{--                                            --}}{{--                                            </p>--}}

{{--                                            <input placeholder="Main Materi" type="text" name="main-materi-bootcamp[]" id="main-materi-bootcamp" autocomplete="main-materi-bootcamp" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('main-materi-bootcamp[]') }}" required>--}}

{{--                                            --}}{{--                                            <input placeholder="Keunggulan Service 2" type="text" name="main-materi-bootcamp[]" id="main-materi-bootcamp" autocomplete="main-materi-bootcamp" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('main-materi-bootcamp[]') }}" required>--}}

{{--                                            --}}{{--                                            <input placeholder="Keunggulan Service 3" type="text" name="main-materi-bootcamp[]" id="main-materi-bootcamp" autocomplete="main-materi-bootcamp" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('main-materi-bootcamp[]') }}" required>--}}

{{--                                            <div id="newDetailMainMenuRow"></div>--}}

{{--                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addDetailMainMenuRow">--}}
{{--                                                Tambahkan Detail Main Materi Bootcamp +--}}
{{--                                            </button>--}}

{{--                                            <div id="newMainMateriRow"></div>--}}
{{--                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addMainMenuRow">--}}
{{--                                                Tambahkan Main Materi Bootcamp +--}}
{{--                                            </button>--}}
{{--                                        </div>--}}

{{--                                        <div class="col-span-6">--}}
{{--                                            <label for="main-materi-bootcamp" class="block mb-2 font-medium text-gray-700 text-md">New Materi Bootcamp</label>--}}

{{--                                            <div id="newDetailMainMenuRow"></div>--}}

{{--                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addDetailMainMenuRow">--}}
{{--                                                Tambahkan Detail Main Materi Bootcamp +--}}
{{--                                            </button>--}}

{{--                                            <div id="newMainMateriRow"></div>--}}
{{--                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addMainMenuRow">--}}
{{--                                                Tambahkan Main Materi Bootcamp +--}}
{{--                                            </button>--}}

{{--                                            <div id="newNewMateriRow"></div>--}}
{{--                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addNewMateriRow">--}}
{{--                                                Tambahkan Materi Bootcamp Baru +--}}
{{--                                            </button>--}}

{{--                                            <div id="newDetailMainMenuRow"></div>--}}

{{--                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addDetailMainMenuRow">--}}
{{--                                                Tambahkan Detail Main Materi Bootcamp +--}}
{{--                                            </button>--}}
{{--                                        </div>--}}

                                        <div class="col-span-6">
                                            <label for="price" class="block mb-3 font-medium text-gray-700 text-md">Harga Bootcamp</label>

                                            <input placeholder="Harga Bootcamp" type="number" name="price" id="price" autocomplete="price" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" value="{{ old('price') }}" required>

                                            @if ($errors->has('price'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('price') }}</p>
                                            @endif
                                        </div>

                                    </div>
                                </div>

                                <div class="px-4 py-3 text-right sm:px-6">
                                    <a href="{{ route('admin.bootcamp.index') }}" type="button" class="inline-flex justify-center px-4 py-2 mr-4 text-sm font-medium text-gray-700 bg-white border border-gray-600 rounded-lg shadow-sm hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300" onclick="return confirm('Are you sure want to cancel? , Any changes you make will not be saved.')">
                                        Cancel
                                    </a>

                                    <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 lg:bg-ezb-services-bg" onclick="return confirm('Are you sure want to submit this data ?')">
                                        Create Bootcamp
                                    </button>
                                </div>

                            </div>
                        </form>

                    </div>
                </main>
            </div>
        </section>
    </main>

@endsection

@push('after-script')

    <script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>

    <script type="text/javascript">
			// add row
			$("#addAdvantagesRow").click(function() {
				var html = '';
				html += '<input placeholder="Keunggulan Bootcamp" type="text" name="advantage-bootcamps[]" id="advantage-bootcamps" autocomplete="advantage-bootcamps" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>';

				$('#newAdvantagesRow').append(html);
			});

			// remove row
			$(document).on('click', '#removeAdvantagesRow', function() {
				$(this).closest('#inputFormAdvantagesRow').remove();
			});
    </script>

    <script type="text/javascript">
			// add row
			$("#addAdvantageBootcampRow").click(function() {
				var html = '';
				html += '<input placeholder="Benefit Bootcamp" type="text" name="benefit-bootcamps[]" id="benefit-bootcamps" autocomplete="benefit-bootcamps" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>';

				$('#newAdvantageBootcampRow').append(html);
			});

			// remove row
			$(document).on('click', '#removeServicesRow', function() {
				$(this).closest('#inputFormServicesRow').remove();
			});
    </script>



{{--    <script type="text/javascript">--}}
{{--			// add row--}}
{{--			$("#addTaglineRow").click(function() {--}}
{{--				var html = '';--}}
{{--				html += '<input placeholder="Tagline" type="text" name="tagline[]" id="tagline" autocomplete="tagline" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>';--}}

{{--				$('#newTaglineRow').append(html);--}}
{{--			});--}}

{{--			// remove row--}}
{{--			$(document).on('click', '#removeTaglineRow', function() {--}}
{{--				$(this).closest('#inputFormTaglineRow').remove();--}}
{{--			});--}}
{{--    </script>--}}

    <script type="text/javascript">
	    // add row
	    $("#addMainMateriRow").click(function() {
		    var html = '';
		    html += '<input placeholder="Main Materi Bootcamp" type="text" name="main-materi-bootcamp[]" id="advantage-service" autocomplete="advantage-service" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>';

		    $('#newMainMateriRow').append(html);
	    });

	    // remove row
	    $(document).on('click', '#removeMainMenyRow', function() {
		    $(this).closest('#inputFormServicesRow').remove();
	    });
    </script>

    <script type="text/javascript">
	    // add row
	    $("#addDetailMainMenuRow").click(function() {
		    var html = '';
		    html += '<input placeholder="Detail Main Materi Bootcmap" type="text" name="detail-materi-bootcamp[]" id="detail-materi-bootcamp" autocomplete="detail-materi-bootcamp" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>';

		    $('#newDetailMainMenuRow').append(html);
	    });

	    // remove row
	    $(document).on('click', '#removeMainMenyRow', function() {
		    $(this).closest('#inputFormServicesRow').remove();
	    });
    </script>

    <script type="text/javascript">
	    // add row
	    $("#addNewMateriRow").click(function() {
		    var html = '';
		    html += '<input placeholder="Main Materi Bootcamp" type="text" name="main-materi-bootcamp[]" id="advantage-service" autocomplete="advantage-service" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>'+'<input placeholder="Detail Main Materi Bootcmap" type="text" name="detail-materi-bootcamp[]" id="detail-materi-bootcamp" autocomplete="detail-materi-bootcamp" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>';

		    $('#newNewMateriRow').append(html);
	    });

	    // remove row
	    $(document).on('click', '#removeMainMenyRow', function() {
		    $(this).closest('#inputFormServicesRow').remove();
	    });
    </script>

{{--    <script type="text/javascript">--}}
{{--			// add row--}}
{{--			$("#addThumbnailRow").click(function() {--}}
{{--				var html = '';--}}
{{--				html += '<input placeholder="Keunggulan 3" type="file" name="thumbnail[]" id="thumbnail" autocomplete="thumbnail" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>';--}}

{{--				$('#newThumbnailRow').append(html);--}}
{{--			});--}}

{{--			// remove row--}}
{{--			$(document).on('click', '#removeThumbnailRow', function() {--}}
{{--				$(this).closest('#inputFormThumbnailRow').remove();--}}
{{--			});--}}
{{--    </script>--}}

@endpush
