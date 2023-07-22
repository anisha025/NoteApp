<!DOCTYPE html>
<html>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
<script src="https://kit.fontawesome.com/2d2642681e.js" crossorigin="anonymous"></script>

<body style="background-color: rgb(157, 197, 198)">
    <div class="w3-container w3-padding">
        <div class="w3-row-padding w3-margin-bottom">
            <!-- This represents each notes -->
            <!-- for each loop here -->
            @foreach($notes as $note)

            <div class="w3-col s4 l3 w3-margin-top">
                <div class="w3-card w3-white w3-round">
                    <div class="w3-container">
                        <div class="w3-container w3-center w3-padding-8">
                            <p style="font-size: 20px; font-weight: bold">{{$note->title}}</p>
                        </div>
                        <div class="w3-container w3-center w3-padding w3-border-top" style="height: 200px">{{$note->description}}</div>

                        <div class="w3-row-padding w3-border-top w3-padding-8">
                            <a href="/note-edit/{{$note->id}}" class="w3-button w3-left w3-xlarge"><i class="fa-solid fa-pen-to-square" style="color: #049175f7"></i></a>
                            <a href="/note-delete/{{$note->id}}" class="w3-button w3-right w3-xlarge"><i class="fa-solid fa-trash" style="color: #b90707"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- end of for each loop here -->
        <button class="w3-button w3-xxlarge w3- w3-orange bordergit branch -M main w3-round-large w3-display-bottomright w3-margin" onclick="document.getElementById('add').style.display='block'" style="position: fixed; right: 16px; bottom: 16px">
            <i class="fa-sharp fa-solid fa-plus fa-beat-fade fa-xl" style="color: #0b120a"></i>
        </button>

        <!-- This is the modal to add new note -->
        <div id="add" class="w3-modal">
            <div class="w3-modal-content w3-animate-zoom w3-card-4 w3-padding w3-round" style="width: 40%">
                <header class="w3-container w3-border-bottom w3-border-teal w3-center">
                    <span onclick="document.getElementById('add').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <h2>Add note</h2>
                </header>
                <div class="w3-container w3-padding">
                    <form action="/store" method="POST">
                        @csrf
                        <div class="w3-container">
                            <label>Title</label>
                            <input class="w3-input" type="text" name="title" placeholder="Enter title here..." required />
                        </div>
                        <br />

                        <div class="w3-container">
                            <label>Description</label>
                            <textarea class="w3-input" rows="5" columns="8" name="description" placeholder="Enter description here..." required></textarea>
                        </div>

                        <div class="w3-container w3-center">
                            <button type="submit" class="w3-button w3-teal w3-round w3-margin-top">
                                Add
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>