@extends('layouts.portal_revamp_scaffold')
@push('title') Campaigns - @endpush
@push('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css" />
@endpush
@push('button')
<div class="col-12 text-end mt-4">
    <a href="{{route('user.campaigns.index')}}"><button class="btn btn-primary rounded">View All Campaigns</button></a>
</div>
@endpush
@push('buttonContent')
<div class="col-12 text-center mt-3">
    <h2 class="page-title">Marketing Campaign</h2>
</div>
<div class="col-lg-7 col-md-9 mx-auto mt-4">
    <div class="card">
        <div class="card-body">
            <p class="markting-salutaion">
                Thank you for signing up with Nova Groove to distribute & promote your music on The Press, Apple Music and Spotify. We promote every song & album released under Nova Groove for Free. We will need the following to start submitting your music to Media Outlets.
            </p>
            <p class="markting-salutaion">
                Thank you for signing up with Nova Groove to     Please fill out the form below and our team will start your marketing campaign
                on the single & album you will want us to promote
            </p>
            <p>NB: The song or album MUST be a new release with us</p>

        </div>
    </div>
</div>
@endpush
@section('content')
<div class="row mt-2 px-lg-4">
    <div class="col-12">
        <form action="{{route('user.campaigns.store')}}" id="form__campaign" method="POST">
            @csrf
            <div class="auth-form">
                <div class="card">
                    <div class="card-body py-4 px-lg-4 px-2">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-lg-4 mb-3">
                                    <label for="" class="form-label">Artist Name</label>
                                    <input type="text" placeholder="Artist Name" class="form-control custom-control" id="artist_name"  value="{{old('artist_name')}}" name="artist_name">
                                    @error('artist_name') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-lg-4 mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" placeholder="Email" class="form-control custom-control" id="email"  value="{{old('email')}}" name="email">
                                    @error("email") <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-lg-4 mb-3">
                                    <label for="" class="form-label">Release Title</label>
                                    <input type="text" placeholder="Release Title" class="form-control custom-control" id="release_title"  value="{{old('release_title')}}" name="release_title">
                                    @error("release_title") <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-lg-4 mb-3">
                                    <label for="" class="form-label">Spotify Link</label>
                                    <input type="url" placeholder="Spotify Link" class="form-control custom-control" id="spotify_link"  value="{{old('spotify_link')}}" name="spotify_link">
                                     @error("spotify_link") <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-lg-4 mb-3">
                                    <label for="" class="form-label">Apple Music / iTunes Link</label>
                                    <input type="text" placeholder="Apple Music / iTunes Link" class="form-control custom-control" id="itune_link"  value="{{old('itune_link')}}" name="itune_link">
                                    @error("itune_link") <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="mb-lg-4 mb-3">
                                    <label for="" class="form-label">Soundcloud Link</label>
                                    <input type="text" placeholder="Soundcloud Link" class="form-control custom-control" id="soundcloud_link"  value="{{old('soundcloud_link')}}" name="soundcloud_link">
                                    @error("soundcloud_link") <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-lg-4 mb-3">
                                    <label for="" class="form-label">Music Video Link (YouTube/Vevo) (Optional)</label>
                                    <input type="text" placeholder="Music Video Link (YouTube/Vevo) (Optional)" class="form-control custom-control" id="musicvideo_link"  value="{{old('musicvideo_link')}}" name="musicvideo_link">
                                    @error("musicvideo_link") <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-lg-4 mb-3">
                                    <label for="" class="form-label">Facebook Link</label>
                                    <input type="text" placeholder="Facebook Link" class="form-control custom-control" id="facebook_link"  value="{{old('facebook_link')}}" name="facebook_link">
                                    @error("facebook_link") <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-lg-4 mb-3">
                                    <label for="" class="form-label">Twitter Link</label>
                                    <input type="text" placeholder="Twitter Link" class="form-control custom-control" id="twitter_link"  value="{{old('twitter_link')}}" name="twitter_link">
                                    @error("twitter_link") <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-lg-4 mb-3">
                                    <label for="" class="form-label">Instagram Link</label>
                                    <input type="text" placeholder="Instagram Link" class="form-control custom-control" id="instagram_link"  value="{{old('instagram_link')}}" name="instagram_link">
                                     @error("instagram_link") <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-lg-4 mb-3">
                                    <label for="" class="form-label">Contact Number</label>
                                    <input type="number" placeholder="Contact Number" class="form-control custom-control" id="contact"  value="{{old('contact')}}" name="contact">
                                     @error("contact") <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-lg-4 mb-3 position-relative input-icon">
                                    <label for="" class="form-label">Release Date</label>
                                    <input type="date" placeholder="Email" class="form-control custom-control" id="release_date"  value="{{old('release_date')}}" name="release_date">
                                    <i class="cal"><img src="./assets/img/calender.png" alt=""></i>
                                    @error("release_date") <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="col-12 mb-lg-4 mb-3">
                                <h2 class="section-heading">What Are You Promoting</h2>
                            </div>

                            <div class="mb-lg-4 mb-3">
                                <span class="check-tab position-relative cursor-pointer">Single <input class="opacity-0 position-absolute" type="radio"   name="is_single" id="single" @if(old('is_single')) checked @endif></span>
                                @error("is_single") <span class="text-danger">{{$message}}</span> @enderror
                                <span class="check-tab position-relative cursor-pointer">EP/Mixtape <input class="opacity-0 position-absolute" type="radio"  name="is_mixtape" id="mixtape" @if(old('is_mixtape')) checked @endif></span>
                                @error("is_mixtape") <span class="text-danger">{{$message}}</span> @enderror
                                <span class="check-tab position-relative cursor-pointer">Album <input class="opacity-0 position-absolute" type="radio"  name="is_album" id="album" @if(old('is_album')) checked @endif></span>
                                @error("is_album") <span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="col-12">
                                <div class="mb-lg-4 mb-3">
                                    <label for="" class="form-label">Tell Us About The Release(Single, Album etc)</label>
                                    <textarea class="form-control custom-control h-auto" rows="4"  name="previous_press" id="previous_press"> {{old('previous_press')}}</textarea>
                                    @error("previous_press") <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-lg-4 mb-3">
                                    <label for="" class="form-label">Artist Biography</label>
                                    <textarea class="form-control custom-control h-auto" rows="4" id="artist_biography"   name="artist_biography">{{old('artist_biography')}}</textarea>
                                    @error("artist_biography") <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary rounded">Submit</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </form>
    </div>
</div>
@endsection
