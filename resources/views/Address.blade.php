<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="py-4">

                    <div class="form-container">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="province" class="form-label">{{ __('Province') }}</label>
                                <input id="province" class="form-input" type="text" name="province" required>
                            </div>

                            <div class="form-group">
                                <label for="district" class="form-label">{{ __('District') }}</label>
                                <input id="district" class="form-input" type="text" name="district">
                            </div>

                            <div class="form-group">
                                <label for="address_1" class="form-label">{{ __('Address') }}</label>
                                <input id="address_1" class="form-input" type="text" name="address_1" required>
                            </div>

                            <button type="submit" class="form-button">{{ __('Submit') }}</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        function submitForm() {
            var form = document.getElementById('addressForm');
            form.submit(); // Submit the form

            // Redirect to the home page after form submission
            window.location.href = "{{ route('nftdata') }}";
        }
    </script>
</x-app-layout>

<style>
/* styles.css */

.form-container {
    max-width: 500px;
    margin: auto;
}

.form-group {
    margin-bottom: 20px;
}

.form-label {
    display: block;
    font-weight: bold;
}

.form-input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 5px;
}


</style>
