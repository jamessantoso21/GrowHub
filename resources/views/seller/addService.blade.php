@extends('layout.seller')

@section('title', 'Add Service')

@section('content')
<div class="container-fluid" style="padding: 1.5rem; background-color: white; border-radius: 0.5rem;">
    <h1 style="font-size: 1.875rem; font-weight: bold; color: #1b4332; margin-bottom: 2rem;">Add Service</h1>

    <div style="max-width: 800px;">
        <h2 style="font-size: 1.5rem; font-weight: 600; color: #1b4332; margin-bottom: 1.5rem;">Service Info</h2>

        <form action="{{ route('sellerServices.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Hidden input for shop_id -->
            <input type="hidden" name="shop_id" value="{{ $shop->id }}">

            <div class="mb-3">
                <label class="form-label" style="color: #1b4332;">Name:</label>
                <input type="text" name="name" class="form-control" style="background-color: #E6D5C3; border: none;" required>
            </div>

            <div class="mb-3">
                <label class="form-label" style="color: #1b4332;">Description:</label>
                <textarea name="description" class="form-control" style="background-color: #E6D5C3; border: none; height: 120px;" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label" style="color: #1b4332;">Price per Hour:</label>
                <input type="number" name="price_per_hour" class="form-control" style="background-color: #E6D5C3; border: none;" step="0.01" required>
            </div>

            <div class="mb-3">
                <label class="form-label" style="color: #1b4332;">Minimum Hours:</label>
                <input type="number" name="minimum_hour" class="form-control" style="background-color: #E6D5C3; border: none;" min="1" required>
            </div>

            <div class="mb-3">
                <label class="form-label" style="color: #1b4332;">Maximum Hours:</label>
                <input type="number" name="maximum_hour" class="form-control" style="background-color: #E6D5C3; border: none;" min="1" required>
            </div>

            <div class="mb-4">
                <label class="form-label" style="color: #1b4332;">Image:</label>
                <input type="file" name="image" class="form-control" style="background-color: #E6D5C3; border: none;" accept="image/*">
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" name="is_available" class="form-check-input" id="availabilityCheck" value="1">
                <label class="form-check-label" for="availabilityCheck" style="color: #1b4332;">
                    Service is Available
                </label>
            </div>

            <input type="hidden" name="image" value="">

            <button type="submit" class="btn btn-success" style="background-color: #1b4332; border: none; padding: 0.5rem 2rem;">
                Add Service
            </button>
        </form>
    </div>
</div>
@endsection