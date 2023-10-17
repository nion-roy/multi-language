<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <div class="container">


    <ul class="nav navbar mt-5 p-0">
      @if (session()->get('language') == 'bangla')
        <li class="nav-item"><a class="nav-link btn btn-success text-white" href="{{ route('english.language') }}">English</a> </li>
      @else
        <li class="nav-item"><a class="nav-link btn btn-success text-white" href="{{ route('bangla.language') }}">বাংলা</a> </li>
      @endif
    </ul>




    <div class="border shadow rounded mt-5 p-4">
      @if (session()->get('language') == 'bangla')
        <h2 class="mb-4">বাংলা ভাষা</h2>
      @else
        <h2 class="mb-4">English Languages</h2>
      @endif
      @if (session()->get('language') == 'bangla')
        <p>আমার দেশের নাম বাংলাদেশ। এটি পূর্ব দক্ষিণ এশিয়ায় অবস্থিত এবং দক্ষিণে বঙ্গোপসাগর, পূর্বে ভারত ও মায়ানমার এবং পশ্চিমে শুধু ভারত। জলপথ সহ এর সাধারণ এলাকা 147,570 বর্গ কিলোমিটার। একটি নির্মম মুক্তি সংগ্রামের পর এটি স্বাধীনতা অর্জন করে। প্রায় ত্রিশ লাখ নারী-পুরুষ স্বাধীনতার জন্য জীবন দিয়েছেন। স্বাধীনতা অর্জনের পর নবজাতক জাতি অনেক কঠিন সময় ও চ্যালেঞ্জের মধ্য দিয়ে গেছে। যাইহোক, এটি সুন্দরভাবে বেড়ে যায়। বাংলাদেশ এখন দক্ষিণ এশিয়ায় বসবাসের অন্যতম সেরা স্থান। আমাদের দেশে দেখার মতো অনেক সুন্দর জায়গা আছে।</p>
      @else
        <p>My country’s name is Bangladesh. It is situated in eastern South Asia and is bordered by the Bay of Bengal in the south, India, and Myanmar to the east, and just India to the west. Its general area is 147,570 square kilometers, including waterways. It achieved independence after a brutal liberation fight. Approximately three million men and women gave their lives for the cause of independence. After attaining independence, the newborn nation went through many difficult times and challenges. However, it rises nicely. Bangladesh is now one of the greatest places to live in South Asia. There are so many beautiful places to see in our nation.</p>
      @endif
    </div>
  </div>


  <div class="container mt-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">@lang('public.localization')</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="">@lang('public.home')</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="">@lang('public.about us')</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="">@lang('public.blog')</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="">@lang('public.contact')</a>
            </li>

          </ul>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Language
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li class="active"><a class="dropdown-item" href="locale/en">English</a></li>
                <li><a class="dropdown-item" href="locale/bn">Bangla</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
