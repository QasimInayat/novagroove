@forelse (getTracks($release->track_ids) as $index=>$track)
        <div class="row bg-dark p-4">
            <input type="hidden" value="{{ $track->id }}" id="track_ID" name="track_ID">
            <div class="col-lg-12 mt-4">
                <div class="frequentlyQsts">
                    <h2 style="color: white;">{{++$index}}. {{$track->title}} - {{getFirstArtist($track->artist)}}</h2>

                </div>
            </div>
            <div class="col-12">
                <p class="mb-2">ISRC CODE  - {{isset($track->isrc_code) ? $track->isrc_code : '-'}}&nbsp;<a href="javascript:;" onClick="updateTrack($(this),'{{ $track->isrc_code }}',{{ $track->id }})"><i class="fa fa-edit" style="color:white"></i></a></p>
                <hr class="hr-releases">
                <p class="mb-2 mt-2" style="color: white;">Artist</p>

                @if(count(json_decode($track->artist)) > 0)
                    @forelse (json_decode($track->artist) as $item)
                        @php
                            $data['name'] = $item->name;
                            $data['role'] = $item->type;
                            $data['spotify_profile_link'] = isset($item->spotify) ? $item->spotify : null;
                            $data['apple_music_profile_link'] = isset($item->apple) ? $item->apple : null;
                            $html = view('user-portal.pages.revamp.royalty-splits.artist',compact('data'));
                        @endphp
                        {!! $html !!}
                    @empty
                    @endforelse
                @endif
                @if(isset($track->artist_ids))
                    @forelse(explode(",",str_replace('"','',$track->artist_ids)) as $aii)
                        {!!  getArtistRole($aii, date('Y-m-d',strtotime($release->created_at))) !!}
                    @empty
                    @endforelse
                @endif

                <hr style="border-top: 1px solid yellow ">






                <hr class="hr-releases">

                @if($track->contains_1 == 'Contain Vocals')
                    <p class="mb-2 mt-2">Contain Vocals - My Song contains lyrics and vocals    </p>
                @elseif($track->contains_1 == 'Instrumental')
                    <p class="mb-2 mt-2">Instrumental - My Song contains no lyrics and vocals</p>
                @endif

                @if($track->contains_2 == "Clean")
                    <p class="mb-2 mt-2">Clean - My Song doesn't contain any profanity (Includes title & artwork)</p>
                @elseif($track->contains_2 == "Explicit")
                    <p class="mb-2 mt-2">Explicit - My Song contain any profanity (Includes title & artwork)</p>
                @elseif($track->contains_2 == "Radio Edit")
                    <p   class="mb-2 mt-2">Radio Edit - The track is clean/censored, but have a explict version.</p>
                @endif

                @if(!empty($track->p_copyright_year))
                    <p class="m-0">&#8471; Copyright - <span>{{$track->p_copyright_year}} | {{$track->p_copyright_name }}</span></p>
                @endif

                <hr class="hr-releases">
                <p class="mb-2 mt-2" style="color: white;">Songwriters</p>
                @if(json_decode($track->songwriter) >0)
                    @forelse (json_decode($track->songwriter) as $item)
                    <p class="mb-2">{{ucwords($item->type)}}  - {{$item->name}}</p>
                    @empty
                    @endforelse
                @endif
                <hr class="hr-releases">
                <p class="mb-2 mt-2"> Audio File  - {{$track->title}}</p>
                <div id="showAudio_{{$track->id}}">
                    <span class="badge bg-warning" style="background:white !important; color:black !important;"><a href="javascript:;" style=" text-decoration: none; color: black;" onClick="playAudio('{{$track->id}}')"><i class="fa fa-play"></i>Play Audio</a></span>
                </div><br>
                <span class="badge bg-warning" style="background:white !important; color:black !important;"><a href="{{route('admin.release.downloadTrack',$track->audio_track)}}" style=" text-decoration: none; color: black;">Download Track</a></span>
                <hr class="hr-releases">
                <p class="mb-2 mt-2"> Lyrics  - {{$track->title}}</p>
                @if($track->lyrics) ? {!! $track->lyrics !!} @else - @endif
            </div>


        </div>

    @empty

    @endforelse


