<!doctype html>
<html lang="en">
<?php include("../php/home.php"); ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mine.css">
</head>
<!-- " filter: invert(); background: linear-gradient(to right, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.5) 10%, rgba(0, 0, 0, 0.5) 90%, rgba(0, 0, 0, 0.2) 100% ), url('images/background1.png') no-repeat center center fixed;background-size: cover;" -->

<body style=" position: relative;">
    <div style="position: fixed; height: 100vh; width: 100%;  background: linear-gradient(135deg, rgba(0, 0, 0, 0.2), rgba(255, 255, 255, 1)), url('images/background1.png') 
    no-repeat center center fixed; background-size: cover;">
        <div class="bgd-1" style="position: fixed; filter: invert(); height: 100vh; width: 100%;  background: linear-gradient(to right, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.2) ), url('images/background1.png') 
    no-repeat center center fixed; background-size: cover; mix-blend-mode: multiply;">
        </div>
    </div>
    <form style="position: absolute; width: 100%">
        <div class="container m-auto" style="width: 100%">
            <div class="shadow-lg">
                <div class="p-2 rounded-1 border border-2 shadow m-2 Q-box">
                    <div class="fw-bold text-white p-3">
                        1 ● What would you like to do when working in the future?
                    </div>

                    <?php echoCheckbox("work from home", "1-1"); ?>
                    <?php echoCheckbox("deal with people", "1-2"); ?>
                    <?php echoCheckbox("take a leadership role", "1-3"); ?>
                    <?php echoCheckbox("add your touch", "1-4"); ?>
                    <?php echoCheckbox("do physical work", "1-5"); ?>
                    <?php echoCheckbox("work using a device", "1-6"); ?>
                    <?php echoCheckbox("work with art and design", "1-7"); ?>
                    <?php echoCheckbox("work with numbers", "1-8"); ?>
                    <?php echoCheckbox("design and create something yourself", "1-9"); ?>
                    <?php echoCheckbox("Mix ideas together", "1-10"); ?>


                </div>

                <div class="p-2 rounded-1 border border-2 shadow m-2 Q-box">
                    <div class="fw-bold text-white p-3">
                        2 ● what's the first thing that comes to your mind when thinking about <div
                            class="fw-bold fst-italic text-primary">Engineering?</div>
                    </div>
                    
                    

                    


                </div>

                <div class="p-2 rounded-1 border border-2 shadow m-2 Q-box">
                    <div class="fw-bold text-white p-3">
                        3 ● what are your favourite subjects?
                    </div>

                    <?php echoCheckboxN("Math ( calculus )", "3-1", "three"); ?>
                    <?php echoCheckboxN("Math ( linear and geometry )", "3-7", "three"); ?>
                    <?php echoCheckboxN("Physics", "3-2", "three"); ?>
                    <?php echoCheckboxN("Mechanics", "3-3", "three"); ?>
                    <?php echoCheckboxN("Chemistry", "3-4", "three"); ?>
                    <?php echoCheckboxN("Biology", "3-5", "three"); ?>
                    <?php echoCheckboxN("Computer Science", "3-6", "three"); ?>



                </div>

                <div class="p-2 rounded-1 border border-2 shadow m-2 Q-box row">
                    <div class="fw-bold text-white p-3">
                        4 ● Let's say you aren't in engineering, what would you major in instead?
                    </div>


                    <?php echoRadio("Natural sciences", "4-1", "4"); ?>
                    <?php echoRadio("Art school", "4-2", "4"); ?>
                    <?php echoRadio("Computer science", "4-3", "4"); ?>
                    <?php echoRadio("Urban planning", "4-4", "4"); ?>






                </div>

                <div class="p-2 rounded-1 border border-2 shadow m-2 Q-box">
                    <div class="fw-bold text-white p-3">
                        5 ● talk a bit about yourself.
                    </div>

                    <?php echoCheckbox("I'm patient ( elec 1 ) ", "5-1"); ?>
                    <?php echoCheckbox("I work systematically ( civil, mech )", "5-2"); ?>
                    <?php echoCheckbox("I'm a visual thinker ( elec 2, arc ) ", "5-3"); ?>
                    <?php echoCheckbox("I'm Artistic ( arc )", "5-4"); ?>
                    <?php echoCheckbox("I can work under pressure ( elec , civil, arc )", "5-5"); ?>
                    <?php echoCheckbox("I understand intuitively ( elec 2 )", "5-6"); ?>
                    <?php echoCheckbox("I'm social ( civil, arc )", "5-7"); ?>
                    <?php echoCheckbox("I'm a leader ( civil , arc )", "5-8"); ?>
                    <?php echoCheckbox("I like to dive into my favourite field ( CMP, EECE )", "5-9"); ?>
                    <?php echoCheckbox("I like to know a little bit of everything ( mech, SBE )", "5-10"); ?>
                    <?php echoCheckbox("I'd like to reinvent the wheel ( aero, cmp, elec 2 )", "5-11"); ?>
                    <?php echoCheckbox("I'd like to work in a team ( civil, arc, chem ) ", "5-12"); ?>
                    <?php echoCheckbox("I'm competitive ( CMP )", "5-13"); ?>





                </div>
            </div>
        </div>

    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
    <script>
        function limitCheckboxes(name, maxAllowed) {
            const checkboxes = document.querySelectorAll(`input[name="${name}"]`);


            checkboxes.forEach(cb => {
                cb.addEventListener("change", () => {
                    const checked = [...checkboxes].filter(box => box.checked);

                    if (checked.length > maxAllowed) {
                        cb.checked = false; // undo last action
                        //alert(`You can only select up to ${maxAllowed} options.`);
                    }
                });
            });
        }

        // Example: allow max 3 checkboxes for "options"
        limitCheckboxes("three", 3);
    </script>
</body>

</html>