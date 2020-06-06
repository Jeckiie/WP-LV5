
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LV5</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
</head>
<body>
    <section class="container d-flex flex-column  align-items-center mb-4">
        <h1>CFC 3</h1>
        <h2>Choose your cat</h2>
    </section>
    <div class="container d-flex flex-column  align-items-center">
        <div id="clock" class="clock display-4"></div>
        <div id="message" class="message"></div>
    </div>
    <div class="row">
        <div id="firstSide" class="container d-flex flex-column  align-items-center side first-side col-5">
            <div class="row d-flex justify-content-end">
                <div class="col-auto">
                    <ul class="cat-info list-group">
                        <li class="list-group-item name" id="left-cat-name">Cat Name</li>
                        <li class="list-group-item age" id="left-cat-age">Cat age</li>
                        <li class="list-group-item skills" id="left-cat-info">Cat Info</li>
                        <li class="list-group-item record">Wins:<span class="wins" id="left-cat-wins"></span> Loss: <span class="loss" id="left-cat-loss"></span></li>
                    </ul>
                </div>
                <div class="col-auto featured-cat-fighter">
                    <img class="featured-cat-fighter-image img-rounded" src="https://via.placeholder.com/300" alt="Featured cat fighter" id="left-cat-img">
                </div>
                <div class="col-auto w-100" style="margin-top: 24px">
                    <div class="row fighter-list-left">
                        <div class="col-md-4 mb-1">
                            <div class="fighter-box"
                            data-info = '{
                                "id": 1,
                                "name": "Cat McTerror" ,
                                "age" : 3,
                                "catInfo": "Very loud",
                                "record" : {
                                    "wins":  22,
                                    "loss": 4
                                }
                            }'>
                                <!--<img src="/getImage.php?id=1" alt="Figter Box 1" width="150" height="150" class="left-cats"/>-->
                                <?php 
                                    include 'databaseFunc.php';
                                    $imageIds = imageIds();
                                    $img = getImage($imageIds[0]);
                                    echo "<img src=". $img . " alt='Figter Box 1' width='150' height='150' class='left-cats'/>"
                                ?>
                                
                            </div>
                        </div>
                        <div class="col-md-4 mb-1">
                            <div class="fighter-box" data-info='{
                                "id": 2,
                                "name": "Caterson CatSpyder Silva" ,
                                "age" : 5,
                                "catInfo": "Slim, broke leg in past years",
                                "record" : {
                                    "wins":  34,
                                    "loss": 10
                                }
                            }'>
                            <?php 
                                    $img = getImage($imageIds[1]);
                                    echo "<img src=". $img . " alt='Figter Box 2' width='150' height='150' class='left-cats'/>"
                                ?>
                            </div>
                        </div>
                        <div class="col-md-4 mb-1">
                            <div class="fighter-box" data-info='{
                                "id": 3,
                                "name": "Firko Cro Cat" ,
                                "age" : 5,
                                "catInfo": "Past his prime, doing seminars",
                                "record" : {
                                    "wins":  38,
                                    "loss": 11
                                }
                            }'>
                            <?php 
                                    $img = getImage($imageIds[2]);
                                    echo "<img src=". $img . " alt='Figter Box 3' width='150' height='150' class='left-cats'/>"
                                ?>
                            </div>
                        </div>
                        <div class="col-md-4 mb-1">
                            <div class="fighter-box" data-info='{
                                "id": 4,
                                "name": "Catbib Furwmagomedov" ,
                                "age" : 2.5,
                                "catInfo": "Current champion, wrestle and catmbo is his style",
                                "record" : {
                                    "wins":  28,
                                    "loss": 0
                                }
                            }'>
                            <?php 
                                    $img = getImage($imageIds[3]);
                                    echo "<img src=". $img . " alt='Figter Box 4' width='150' height='150' class='left-cats'/>"
                                ?>
                            </div>
                        </div>
                        <div class="col-md-4 mb-1">
                            <div class="fighter-box" data-info='{
                                "id": 5,
                                "name": "Kit Kitty Kones" ,
                                "age" : 3,
                                "catInfo": "Bad kitty, loves to use dog food better strength",
                                "record" : {
                                    "wins":  26,
                                    "loss": 1
                                }
                            }'>
                            <?php 
                                    $img = getImage($imageIds[4]);
                                    echo "<img src=". $img . " alt='Figter Box 5' width='150' height='150' class='left-cats'/>"
                                ?>
                            </div>
                        </div>
                        <div class="col-md-4 mb-1">
                            <div class="fighter-box" data-info='{
                                "id": 6,
                                "name": "Coy BigCat Meowson" ,
                                "age" : 5,
                                "catInfo": "Big kitty, loves to fight",
                                "record" : {
                                    "wins":  23,
                                    "loss": 18
                                }
                            }'>
                            <?php 
                                    $img = getImage($imageIds[5]);
                                    echo "<img src=". $img . " alt='Figter Box 6' width='150' height='150' class='left-cats'/>"
                                ?>
                            </div>
                        </div>
                        <?php 
                            $noOfNewFighters = noOfNewFighters();
                            $fighterIds = fighterIds();
                            for ($x = 0; $x < $noOfNewFighters; $x++) {
                                $fighterInfo = getFighter($fighterIds[$x]);
                                echo "<div class='col-md-4 mb-1'>
                                <div class='fighter-box' data-info='{
                                    'id': $x,
                                    'name': $fighterInfo[0] ,
                                    'age' : $fighterInfo[1],
                                    'catInfo': $fighterInfo[2],
                                    'record' : {
                                        'wins':  $fighterInfo[3],
                                        'loss': $fighterInfo[4]
                                    }
                                }'>
                                <img src=$fighterInfo[5] alt='Figter Box'.$x.'' width='150' height='150' class='left-cats'/>
                                </div>
                                </div>";
                            }
                            
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2 d-flex flex-column align-items-center">
            <p class="display-4">VS</p>
            <button id="generateFight" class="btn btn-primary mb-4 btn-lg">Fight</button>
            <button id="randomFight" class="btn btn-secondary mb-4">Select Random fighters</button>
            <button id="addNewFighter" class="btn btn-primary btn-lg">Add new fighter</button>
            <script>
                var btn = document.getElementById('addNewFighter');
                btn.addEventListener('click', function() {
                document.location.href = '/addFighter.php';
                });
            </script>
        </div>
        <div id="secondSide" class="container d-flex flex-column align-items-center side second-side col-5">
            <div class="row">
                <div class="col-auto featured-cat-fighter">
                    <img class="featured-cat-fighter-image img-rounded" src="https://via.placeholder.com/300" alt="Featured cat fighter" id="right-cat-img">
                </div>
                <div class="col-auto">
                    <ul class="cat-info list-group">
                        <li class="list-group-item name" id="right-cat-name">Cat Name</li>
                        <li class="list-group-item age" id="right-cat-age">Cat age</li>
                        <li class="list-group-item skills" id="right-cat-info">Cat Info</li>
                        <li class="list-group-item record">Wins: <span class="wins" id="right-cat-wins"></span>Loss: <span class="loss" id="right-cat-loss"></span></li>
                    </ul>
                </div>
                <div class="col-auto w-100" style="margin-top: 24px">
                    <div class="row fighter-list">
                        <div class="col-md-4 mb-1">
                            <div class="fighter-box"
                            data-info = '{
                                "id": 1,
                                "name": "Cat McTerror" ,
                                "age" : 3,
                                "catInfo": "Very loud",
                                "record" : {
                                    "wins":  22,
                                    "loss": 4
                                }
                            }'
                            >
                            <?php 
                                    $img = getImage($imageIds[0]);
                                    echo "<img src=". $img . " alt='Figter Box 1' width='150' height='150' class='right-cats'/>"
                                ?>
                            </div>
                        </div>
                        <div class="col-md-4 mb-1">
                            <div class="fighter-box" data-info='{
                                "id": 2,
                                "name": "Caterson CatSpyder Silva" ,
                                "age" : 5,
                                "catInfo": "Slim, broke leg in past years",
                                "record" : {
                                    "wins":  34,
                                    "loss": 10
                                }
                            }'>
                            <?php 
                                    $img = getImage($imageIds[1]);
                                    echo "<img src=". $img . " alt='Figter Box 2' width='150' height='150' class='right-cats'/>"
                                ?>
                            </div>
                        </div>
                        <div class="col-md-4 mb-1">
                            <div class="fighter-box" data-info='{
                                "id": 3,
                                "name": "Firko Cro Cat" ,
                                "age" : 5,
                                "catInfo": "Past his prime, doing seminars",
                                "record" : {
                                    "wins":  38,
                                    "loss": 11
                                }
                            }'>
                            <?php 
                                    $img = getImage($imageIds[2]);
                                    echo "<img src=". $img . " alt='Figter Box 3' width='150' height='150' class='right-cats'/>"
                                ?>
                            </div>
                        </div>
                        <div class="col-md-4 mb-1">
                            <div class="fighter-box" data-info='{
                                "id": 4,
                                "name": "Catbib Furwmagomedov" ,
                                "age" : 2.5,
                                "catInfo": "Current champion, wrestle and catmbo",
                                "record" : {
                                    "wins":  28,
                                    "loss": 0
                                }
                            }'>
                            <?php 
                                    $img = getImage($imageIds[3]);
                                    echo "<img src=". $img . " alt='Figter Box 4' width='150' height='150' class='right-cats'/>"
                                ?>
                            </div>
                        </div>
                        <div class="col-md-4 mb-1">
                            <div class="fighter-box" data-info='{
                                "id": 5,
                                "name": "Kit Kitty Kones" ,
                                "age" : 3,
                                "catInfo": "Bad kitty, loves to use dog food better strength",
                                "record" : {
                                    "wins":  26,
                                    "loss": 1
                                }
                            }'>
                            <?php 
                                    $img = getImage($imageIds[4]);
                                    echo "<img src=". $img . " alt='Figter Box 5' width='150' height='150' class='right-cats'/>"
                                ?>
                            </div>
                        </div>
                        <div class="col-md-4 mb-1">
                            <div class="fighter-box" data-info='{
                                "id": 6,
                                "name": "Roy BigCat Meowson" ,
                                "age" : 5,
                                "catInfo": "Big kitty, loves to fight",
                                "record" : {
                                    "wins":  23,
                                    "loss": 18
                                }
                            }'>
                            <?php 
                                    $img = getImage($imageIds[5]);
                                    echo "<img src=". $img . " alt='Figter Box 6' width='150' height='150' class='right-cats'/>"
                                ?>
                            </div>
                        </div>
                        <?php 
                            for ($x = 0; $x < $noOfNewFighters; $x++) {
                                $fighterInfo = getFighter($fighterIds[$x]);
                                echo "<div class='col-md-4 mb-1'>
                                <div class='fighter-box' data-info='{
                                    'id': $x,
                                    'name': $fighterInfo[0] ,
                                    'age' : $fighterInfo[1],
                                    'catInfo': $fighterInfo[2],
                                    'record' : {
                                        'wins':  $fighterInfo[3],
                                        'loss': $fighterInfo[4]
                                    }
                                }'>
                                <img src=$fighterInfo[5] alt='Figter Box'.$x.'' width='150' height='150' class='right-cats'/>
                                </div>
                                </div>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./app.js"></script>
</body>
</html>