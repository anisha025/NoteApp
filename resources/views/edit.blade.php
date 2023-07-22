<!DOCTYPE html>
<html>
<title>Edit note</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />

<body style="background-color: rgb(157, 197, 198)">
    <div class="w3-container" style="margin-top: 50px">
        <div class="w3-modal-content w3-animate-zoom w3-card-4 w3-padding w3-round" style="width: 40%">
            <header class="w3-container w3-border-bottom w3-border-teal w3-center">
                <h2>Edit note</h2>
            </header>
            <div class="w3-container w3-padding">
                <form action="/note-update/{{$note->id}}" method="POST">
                    @csrf
                    <div class="w3-container">
                        <label>Title</label>
                        <input class="w3-input" type="text" name="title" value="{{$note->title}}" required />
                    </div>
                    <br />

                    <div class="w3-container">
                        <label>Description</label>
                        <textarea class="w3-input" rows="5" columns="8" name="description" required>{{$note->description}}</textarea>
                    </div>

                    <div class="w3-container w3-center">
                        <button type="submit" class="w3-button w3-teal w3-round w3-margin-top" required>
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>