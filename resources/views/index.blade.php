@extends('layout.app')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movie">
            <h2 class="capitalize text-white text-lg font-semibold">Popular Movie</h2>
            <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-6 gap-3 ">
                 {{-- @foreach ($popularMovies as $movie)
                    @if ($loop->index < 16)
                        <div class="mt-8 relative">
                            <a href="{{ route('movie.show', $movie['id']) }}">
                                <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }}" class="hover:opacity-50 transition ease-in-out duration-150 rounded-lg"/>
                            </a>
                            <span class="ml-3 mt-3 border-2 border-yellow-500 rounded-full w-8 h-8 text-center absolute top-0 left-0 text-white font-semibold text-sm flex justify-center items-center">
                                {{ $movie['vote_average'] * 10 }} <small class="text-xs">%</small>
                            </span>
                            <div class="mt-2">
                                <a href="{{ route('movie.show', $movie['id']) }}" class="text-md pt-4 text-white font-semibold hover:text-yellow-500">{{ $movie['title'] }}</a>
                                <div class="flex items-center text-gray-400 text-sm">
                                    {{-- <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, y') }}</span> --}}
                                {{-- </div>
                            </div>
                        </div>
                    @endif
                @endforeach --}} 
                        <div class="mt-8 relative ">
                            <a href="">
                                <img src="https://i.pinimg.com/736x/b3/99/e3/b399e356dcd7ecd0e8835700c7a6941d.jpg" alt="movie" class="rounded-lg"/>
                            </a> 
                            <span class="ml-3 mt-3 border-2 border-yellow-500 rounded-full w-8 h-8 text-center absolute top-0 left-0 text-white font-semibold text-sm flex justify-center items-center">
                               90 <small class="text-xs">%</small>
                            </span>
                            <div class="mt-2">
                                <a href="" class="text-md pt-4 text-white font-semibold hover:text-yellow-500">Godzilla vs Kong</a>
                                <div class="flex items-center text-gray-400 text-sm">
                                    <span>12/12/2021</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 relative">
                            <a href="">
                                <img src="https://i.pinimg.com/736x/b3/99/e3/b399e356dcd7ecd0e8835700c7a6941d.jpg" alt="movie" class="rounded-lg"/>
                            </a> 
                            <span class="ml-3 mt-3 border-2 border-yellow-500 rounded-full w-8 h-8 text-center absolute top-0 left-0 text-white font-semibold text-sm flex justify-center items-center">
                               90 <small class="text-xs">%</small>
                            </span>
                            <div class="mt-2">
                                <a href="" class="text-md pt-4 text-white font-semibold hover:text-yellow-500">Godzilla vs Kong</a>
                                <div class="flex items-center text-gray-400 text-sm">
                                    <span>12/12/2021</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 relative">
                            <a href="">
                                <img src="https://i.pinimg.com/736x/b3/99/e3/b399e356dcd7ecd0e8835700c7a6941d.jpg" alt="movie" class="rounded-lg"/>
                            </a>

                            <span class="ml-3 mt-3 border-2 border-yellow-500 rounded-full w-8 h-8 text-center absolute top-0 left-0 text-white font-semibold text-sm flex justify-center items-center">
                               90 <small class="text-xs">%</small>
                            </span>
                            <div class="mt-2">
                                <a href="" class="text-md pt-4 text-white font-semibold hover:text-yellow-500">Godzilla vs Kong</a>
                                <div class="flex items-center text-gray-400 text-sm">
                                    <span>12/12/2021</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 relative">
                            <a href="">
                                <img src="https://i.pinimg.com/736x/b3/99/e3/b399e356dcd7ecd0e8835700c7a6941d.jpg" alt="movie" class="rounded-lg"/>
                            </a> 
                            <span class="ml-3 mt-3 border-2 border-yellow-500 rounded-full w-8 h-8 text-center absolute top-0 left-0 text-white font-semibold text-sm flex justify-center items-center">
                               90 <small class="text-xs">%</small>
                            </span>
                            <div class="mt-2">
                                <a href="" class="text-md pt-4 text-white font-semibold hover:text-yellow-500">Godzilla vs Kong</a>
                                <div class="flex items-center text-gray-400 text-sm">
                                    <span>12/12/2021</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 relative">
                            <a href="">
                                <img src="https://i.pinimg.com/736x/b3/99/e3/b399e356dcd7ecd0e8835700c7a6941d.jpg" alt="movie" class="rounded-lg"/>
                            </a> 
                            <span class="ml-3 mt-3 border-2 border-yellow-500 rounded-full w-8 h-8 text-center absolute top-0 left-0 text-white font-semibold text-sm flex justify-center items-center">
                               90 <small class="text-xs">%</small>
                            </span>
                            <div class="mt-2">
                                <a href="" class="text-md pt-4 text-white font-semibold hover:text-yellow-500">Godzilla vs Kong</a>
                                <div class="flex items-center text-gray-400 text-sm">
                                    <span>12/12/2021</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 relative">
                            <a href="">
                                <img src="https://i.pinimg.com/736x/b3/99/e3/b399e356dcd7ecd0e8835700c7a6941d.jpg" alt="movie" class="rounded-lg"/>
                            </a> 
                            <span class="ml-3 mt-3 border-2 border-yellow-500 rounded-full w-8 h-8 text-center absolute top-0 left-0 text-white font-semibold text-sm flex justify-center items-center">
                               90 <small class="text-xs">%</small>
                            </span>
                            <div class="mt-2">
                                <a href="" class="text-md pt-4 text-white font-semibold hover:text-yellow-500">Godzilla vs Kong</a>
                                <div class="flex items-center text-gray-400 text-sm">
                                    <span>12/12/2021</span>
                                </div>
                            </div>
                        </div>
            </div>                  
        </div>
        <div class="mt-8 relative">
            <a href="">
                <img src="https://i.pinimg.com/736x/b3/99/e3/b399e356dcd7ecd0e8835700c7a6941d.jpg" alt="movie" class="rounded-lg"/>
            </a> 
            <span class="ml-3 mt-3 border-2 border-yellow-500 rounded-full w-8 h-8 text-center absolute top-0 left-0 text-white font-semibold text-sm flex justify-center items-center">
               90 <small class="text-xs">%</small>
            </span>
            <div class="mt-2">
                <a href="" class="text-md pt-4 text-white font-semibold hover:text-yellow-500">Godzilla vs Kong</a>
                <div class="flex items-center text-gray-400 text-sm">
                    <span>12/12/2021</span>
                </div>
            </div>
        </div>
        <div class="mt-8 relative">
                            <a href="">
                                <img src="https://i.pinimg.com/736x/b3/99/e3/b399e356dcd7ecd0e8835700c7a6941d.jpg" alt="movie" class="rounded-lg"/>
                            </a> 
                            <span class="ml-3 mt-3 border-2 border-yellow-500 rounded-full w-8 h-8 text-center absolute top-0 left-0 text-white font-semibold text-sm flex justify-center items-center">
                               90 <small class="text-xs">%</small>
                            </span>
                            <div class="mt-2">
                                <a href="" class="text-md pt-4 text-white font-semibold hover:text-yellow-500">Godzilla vs Kong</a>
                                <div class="flex items-center text-gray-400 text-sm">
                                    <span>12/12/2021</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 relative">
                            <a href="">
                                <img src="https://i.pinimg.com/736x/b3/99/e3/b399e356dcd7ecd0e8835700c7a6941d.jpg" alt="movie" class="rounded-lg"/>
                            </a> 
                            <span class="ml-3 mt-3 border-2 border-yellow-500 rounded-full w-8 h-8 text-center absolute top-0 left-0 text-white font-semibold text-sm flex justify-center items-center">
                               90 <small class="text-xs">%</small>
                            </span>
                            <div class="mt-2">
                                <a href="" class="text-md pt-4 text-white font-semibold hover:text-yellow-500">Godzilla vs Kong</a>
                                <div class="flex items-center text-gray-400 text-sm">
                                    <span>12/12/2021</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 relative">
                            <a href="">
                                <img src="https://i.pinimg.com/736x/b3/99/e3/b399e356dcd7ecd0e8835700c7a6941d.jpg" alt="movie" class="rounded-lg"/>
                            </a> 
                            <span class="ml-3 mt-3 border-2 border-yellow-500 rounded-full w-8 h-8 text-center absolute top-0 left-0 text-white font-semibold text-sm flex justify-center items-center">
                               90 <small class="text-xs">%</small>
                            </span>
                            <div class="mt-2">
                                <a href="" class="text-md pt-4 text-white font-semibold hover:text-yellow-500">Godzilla vs Kong</a>
                                <div class="flex items-center text-gray-400 text-sm">
                                    <span>12/12/2021</span>
                                </div>
                            </div>
                        </div>
            </div>                  
        </div>

                            <span class="ml-3 mt-3 border-2 border-yellow-500 rounded-full w-8 h-8 text-center absolute top-0 left-0 text-white font-semibold text-sm flex justify-center items-center">
                               90 <small class="text-xs">%</small>
                            </span>
                            <div class="mt-2">
                                <a href="" class="text-md pt-4 text-white font-semibold hover:text-yellow-500">Avengers (Infinty war)</a>
                                <div class="flex items-center text-gray-400 text-sm">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 relative">
                            <a href="">
                                <img src="https://i.pinimg.com/736x/40/00/64/400064560aff2ea2725a40bb92cc4a39.jpg" class="hover:opacity-50 transition ease-in-out duration-150 rounded-lg"/>
                            </a>
                            <span class="ml-3 mt-3 border-2 border-yellow-500 rounded-full w-8 h-8 text-center absolute top-0 left-0 text-white font-semibold text-sm flex justify-center items-center">
                               90 <small class="text-xs">%</small>
                            </span>
                            <div class="mt-2">
                                <a href="" class="text-md pt-4 text-white font-semibold hover:text-yellow-500">Avengers (Infinty war)</a>
                                <div class="flex items-center text-gray-400 text-sm">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 relative">
                            <a href="">
                                <img src="https://i.pinimg.com/736x/40/00/64/400064560aff2ea2725a40bb92cc4a39.jpg" class="hover:opacity-50 transition ease-in-out duration-150 rounded-lg"/>
                            </a>
                            <span class="ml-3 mt-3 border-2 border-yellow-500 rounded-full w-8 h-8 text-center absolute top-0 left-0 text-white font-semibold text-sm flex justify-center items-center">
                               90 <small class="text-xs">%</small>
                            </span>
                            <div class="mt-2">
                                <a href="" class="text-md pt-4 text-white font-semibold hover:text-yellow-500">Avengers (Infinty war)</a>
                                <div class="flex items-center text-gray-400 text-sm">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 relative">
                            <a href="">
                                <img src="https://i.pinimg.com/736x/40/00/64/400064560aff2ea2725a40bb92cc4a39.jpg" class="hover:opacity-50 transition ease-in-out duration-150 rounded-lg"/>
                            </a>
                            <span class="ml-3 mt-3 border-2 border-yellow-500 rounded-full w-8 h-8 text-center absolute top-0 left-0 text-white font-semibold text-sm flex justify-center items-center">
                               90 <small class="text-xs">%</small>
                            </span>
                            <div class="mt-2">
                                <a href="" class="text-md pt-4 text-white font-semibold hover:text-yellow-500">Avengers (Infinty war)</a>
                                <div class="flex items-center text-gray-400 text-sm">
                                    <span></span>
                                </div>
                            </div>
                        </div>
            </div>                  
        </div>
    </div>
@endsection
