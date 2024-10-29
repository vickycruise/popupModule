<div>

    @if($icon)
            <div id="togglePopupBtn">
            <img  src="{{ asset($icon) }}" alt="" style="width: 20px; height: 20px; margin-right: 5px;">
            {{ $btnTitle ?: 'Open Popup' }}
            </div>
    @else
        <button  id="togglePopupBtn" class="btn btn-primary">
            {{ $btnTitle ?: 'Open Popup' }}
        </button>
    @endif


    <div id="popup" class="popup hidden">
        <div class="popup-content">
            <span id="closePopup" class="close">&times;</span>
            <h2>{{ $title }}</h2>
            <p>{{ $content }}</p>
        </div>
    </div>

    <style>
        .popup {
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .popup-content {
            background: white;
            padding: 20px;
            border-radius: 5px;
            position: relative;
            width: 300px;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 15px;
            cursor: pointer;
        }

        .hidden {
            display: none;
        }
    </style>

    <script>
        document.getElementById('togglePopupBtn').addEventListener('click', function() {
            document.getElementById('popup').classList.toggle('hidden');
        });

        document.getElementById('closePopup').addEventListener('click', function() {
            document.getElementById('popup').classList.add('hidden');
        });
    </script>
</div>
