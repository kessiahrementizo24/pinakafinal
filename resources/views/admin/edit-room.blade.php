@extends('master')
@section('title', 'Create Guest House')

@section('content')
<style>
    body {
        background-color: rgb(236, 236, 236);
        font-family: 'Arial', sans-serif;
    }

    .container {
        background-color: white;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
        position: relative;
    }

    h1 {
        font-size: 36px;
        color: #333;
        font-weight: bold;
        margin-bottom: 30px;
    }

    .form-group label {
        font-size: 16px;
        color: #555;
    }

    .form-control {
        border-radius: 20px;
        border: 1px solid #ccc;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 20px;
        font-size: 18px;
        padding: 12px 25px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .btn-back {
        position: absolute;
        top: 20px;
        left: 20px;
        font-size: 18px;
        color: #007bff;
        border: none;
        background: transparent;
        cursor: pointer;
    }

    .text-center p {
        color: red;
    }

    @media (max-width: 767px) {
        .container {
            padding: 20px;
        }

        h1 {
            font-size: 28px;
        }
    }
</style>
</head>
<body>

    <div class="container text-center bg-white">
        <!-- Back Button -->
        <button class="btn-back" onclick="window.history.back();">
            &larr; Back
        </button>

        <form method="POST" action="/admin/update-room/{{ $listing->id }}" enctype="multipart/form-data">
            @csrf
            <h1>Create New Guest House</h1>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <!-- Room Name -->
                    <div class="form-group mb-4">
                        <label for="roomName" class="mb-2">Room Name</label>
                        <input type="text" class="form-control" id="roomName" name="room_name" value="{{ $listing->room_name }}">
                        @error('room_name')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Room Images -->
                    <div class="form-group mb-4">
                        <label for="room_image" class="mb-2">Room Images (minimum 5 images)</label>
                        <input type="file" multiple class="form-control" id="room_image" name="room_image[]">
                        @error('room_image')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Room Description -->
                    <div class="form-group mb-4">
                        <label for="roomDetails" class="mb-2">Room Description</label>
                        <textarea class="form-control" id="roomDetails" name="room_details" rows="3">{{ $listing->room_details }}</textarea>
                        @error('room_details')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Room Gender and Price -->
                    <div class="form-group mb-4">
                        <div class="row">
                            <div class="col-6">
                                <label for="room_gender" class="mb-2">Room Gender</label>
                                <select class="form-select" name="room_gender" id="room_gender">
                                    <option value="for-boys">For boys</option>
                                    <option value="for-girls">For girls</option>
                                </select>
                                @error('room_gender')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="room_price" class="mb-2">Room Price</label>
                                <input type="text" class="form-control" id="roomPrice" name="room_price" value="{{ $listing->room_price }}">
                                @error('room_price')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button (Left Aligned) -->
                    <div class="form-group mt-4 text-start">
                        <button type="submit" class="btn btn-primary">Update Room</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


@endsection
