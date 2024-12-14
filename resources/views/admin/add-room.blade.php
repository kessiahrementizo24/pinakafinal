@extends('master')
@section('title', 'Create Guest House')

@section('content')
<style>
    body {
        background-color: #f7f7f7;
        font-family: 'Arial', sans-serif;
    }

    .container {
        background-color: white;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
    }

    h1 {
        font-size: 32px;
        color: #333;
        font-weight: 700;
        margin-bottom: 30px;
    }

    .form-group label {
        font-size: 16px;
        color: #555;
        font-weight: 600;
    }

    .form-control {
        border-radius: 25px;
        border: 1px solid #ccc;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 25px;
        font-size: 18px;
        padding: 12px 25px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .text-danger {
        font-size: 14px;
    }

    .form-group .row {
        margin-bottom: 20px;
    }

    /* Styling for the back button */
    .btn-back {
        background-color: transparent;
        border: none;
        font-size: 18px;
        color: #007bff;
        padding: 10px 20px;
        cursor: pointer;
        text-align: left;
    }

    .btn-back:hover {
        color: #0056b3;
        text-decoration: underline;
    }

    /* Responsive Design */
    @media (max-width: 767px) {
        .container {
            padding: 20px;
        }

        h1 {
            font-size: 28px;
        }

        .form-control {
            border-radius: 20px;
        }

        .btn-primary {
            width: 100%;
            padding: 15px;
        }

        .btn-back {
            font-size: 16px;
        }
    }
</style>

<body>
    <div class="container">
        <!-- Back Button -->
        <button class="btn-back" onclick="window.history.back();">
            &larr; Back
        </button>

        <!-- Form to Create Room -->
        <form method="POST" action="/admin/guesthouses/create" enctype="multipart/form-data">
            @csrf
            <h1 class="text-center">Create New Room</h1>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <!-- Room Name -->
                    <div class="form-group mb-4">
                        <label for="roomName">Room Name</label>
                        <input type="text" class="form-control" id="roomName" name="room_name" value="{{ old('room_name') }}">
                        @error('room_name')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Room Images -->
                    <div class="form-group mb-4">
                        <label for="room_image">Room Images (minimum 5 images)</label>
                        <input type="file" multiple class="form-control" id="room_image" name="room_image[]">
                        @error('room_image')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Room Description -->
                    <div class="form-group mb-4">
                        <label for="roomDetails">Room Description</label>
                        <textarea class="form-control" id="roomDetails" name="room_details" rows="4">{{ old('room_details') }}</textarea>
                        @error('room_details')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Room Gender and Price -->
                    <div class="form-group mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="room_gender">Room Gender</label>
                                <select class="form-select" name="room_gender">
                                    <option value="for-boys">For boys</option>
                                    <option value="for-girls">For girls</option>
                                </select>
                                @error('room_gender')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="room_price">Room Price</label>
                                <input type="text" class="form-control" id="roomPrice" name="room_price" value="{{ old('room_price') }}">
                                @error('room_price')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group text-center mt-4">
                        <button type="submit" class="btn btn-primary px-5 py-3">Create Room</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

@endsection