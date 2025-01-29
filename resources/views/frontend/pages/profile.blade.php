@extends('frontend.layouts.master')

@section('title', 'Edit Provider Details')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4">Edit Provider Details</h1>

        @if ($provider)
            <form action="{{ route('providers.update', $provider->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Provider Information -->
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h4>Provider Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label"><strong>Name</strong></label>
                            <input type="text" id="name" name="name" class="form-control"
                                   value="{{ old('name', $provider->user->name ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label for="api_token" class="form-label"><strong>API Token</strong></label>
                            <input type="text" id="api_token" name="api_token" class="form-control"
                                   value="{{ old('api_token', $provider->api_token ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><strong>Contact Preference</strong></label><br>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="contact_yes" name="contact_preference"
                                       value="1" class="form-check-input"
                                        {{ old('contact_preference', $provider->contact_preference) ? 'checked' : '' }}>
                                <label for="contact_yes" class="form-check-label">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="contact_no" name="contact_preference"
                                       value="0" class="form-check-input"
                                        {{ old('contact_preference', $provider->contact_preference) == 0 ? 'checked' : '' }}>
                                <label for="contact_no" class="form-check-label">No</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="sales_mail" class="form-label"><strong>Sales Mail</strong></label>
                            <input type="email" id="sales_mail" name="sales_mail" class="form-control"
                                   value="{{ old('sales_mail', $provider->sales_mail ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label for="response_time" class="form-label"><strong>Response Time (hours)</strong></label>
                            <input type="number" id="response_time" name="response_time" class="form-control"
                                   value="{{ old('response_time', $provider->response_time) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><strong>Include Weekends</strong></label><br>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="weekends_yes" name="include_weekends"
                                       value="1" class="form-check-input"
                                        {{ old('include_weekends', $provider->include_weekends) ? 'checked' : '' }}>
                                <label for="weekends_yes" class="form-check-label">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="weekends_no" name="include_weekends"
                                       value="0" class="form-check-input"
                                        {{ old('include_weekends', $provider->include_weekends) == 0 ? 'checked' : '' }}>
                                <label for="weekends_no" class="form-check-label">No</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="about_us" class="form-label"><strong>About Us</strong></label>
                            <textarea id="about_us" name="about_us"
                                      class="form-control">{{ old('about_us', $provider->about_us ?? '') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="choose_us" class="form-label"><strong>Why Choose Us</strong></label>
                            <textarea id="choose_us" name="choose_us"
                                      class="form-control">{{ old('choose_us', $provider->choose_us ?? '') }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Provider Media -->
                <h3>Media</h3>
                @if ($provider->media->isNotEmpty())
                    @foreach ($provider->media as $media)
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $media->name }}</h5>
                                <p class="card-text"><strong>File Type:</strong> {{ ucfirst($media->file_type) }}</p>
                                <p class="card-text"><strong>Title:</strong> {{ $media->title ?? 'N/A' }}</p>
                                <a href="{{ asset($media->file_path) }}" target="_blank" class="btn btn-primary">
                                    <img class="foy-provider-img" src="{{ asset($media->file_path) }}">
                                </a>

                                <a href="{{ route('media.edit', $media->id) }}" class="btn btn-warning">Edit Media</a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No media available for this provider.</p>
                @endif

                <button type="submit" class="btn btn-success">Update Provider</button>
            </form>
        @else
            <p class="text-danger">Provider not found.</p>
        @endif
    </div>
@endsection
