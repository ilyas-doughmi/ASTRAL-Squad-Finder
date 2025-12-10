<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEXUS | Agent Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Rajdhani:wght@600;700;800&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        nexusGreen: '#cfff04',
                        nexusDark: '#050505',
                        nexusGray: '#121212',
                    },
                    fontFamily: {
                        heading: ['Rajdhani', 'sans-serif'],
                        body: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #050505;
            background-image: 
                linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 50px 50px;
        }

        /* Custom Radio Button Styling for Games */
        .game-radio:checked + label {
            border-color: #cfff04;
            background-color: rgba(207, 255, 4, 0.1);
            box-shadow: 0 0 20px rgba(207, 255, 4, 0.2);
        }
        .game-radio:checked + label i {
            display: block; /* Show Checkmark */
        }
    </style>
</head>

<body class="text-white font-body min-h-screen w-full flex flex-col relative overflow-x-hidden py-10">

    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-nexusGreen/10 blur-[150px] rounded-full pointer-events-none -z-10"></div>

    <nav class="absolute top-0 left-0 w-full p-6 z-20">
        <a href="index.html" class="flex items-center gap-3 w-max opacity-70 hover:opacity-100 transition-opacity">
            <div class="w-8 h-8 bg-nexusGreen text-black flex items-center justify-center rounded skew-x-[-10deg]">
                <i class="fa-solid fa-bolt text-lg skew-x-[10deg]"></i>
            </div>
            <span class="text-xl font-black font-heading tracking-widest text-white uppercase">Nexus</span>
        </a>
    </nav>

    <main class="flex-grow flex items-center justify-center px-4 relative z-10 mt-10 md:mt-0">
        
        <div class="w-full max-w-2xl bg-[#0F0F0F] border border-white/10 p-8 md:p-10 rounded-2xl shadow-[0_0_50px_rgba(0,0,0,0.8)] relative overflow-hidden">
            
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-nexusGreen to-transparent opacity-50"></div>

            <div class="text-center mb-8">
                <h1 class="text-4xl font-black font-heading uppercase text-white mb-2 tracking-wide">
                    New Agent <span class="text-nexusGreen">Protocol</span>
                </h1>
                <p class="text-gray-500 text-sm">Create your identity to join the matchmaking network.</p>
            </div>

            <form action="../Includes/register.php" method="POST" class="space-y-6">

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-gray-400 uppercase tracking-wider font-heading ml-1">Username</label>
                        <input type="text" name="username" placeholder="e.g. Faker" required class="w-full bg-[#171717] border border-white/10 rounded-lg py-3 px-4 text-white placeholder-gray-600 focus:outline-none focus:border-nexusGreen focus:ring-1 focus:ring-nexusGreen transition-all">
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-bold text-gray-400 uppercase tracking-wider font-heading ml-1">Email Address</label>
                        <input type="email" name="email" placeholder="agent@nexus.gg" required class="w-full bg-[#171717] border border-white/10 rounded-lg py-3 px-4 text-white placeholder-gray-600 focus:outline-none focus:border-nexusGreen focus:ring-1 focus:ring-nexusGreen transition-all">
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-wider font-heading ml-1">Secure Password</label>
                    <input type="password" name="password" placeholder="••••••••••••" required class="w-full bg-[#171717] border border-white/10 rounded-lg py-3 px-4 text-white placeholder-gray-600 focus:outline-none focus:border-nexusGreen focus:ring-1 focus:ring-nexusGreen transition-all">
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-wider font-heading ml-1">Profile Image URL</label>
                    <div class="flex gap-2">
                        <input type="text" name="pfp_image" placeholder="https://imgur.com/..." class="w-full bg-[#171717] border border-white/10 rounded-lg py-3 px-4 text-white placeholder-gray-600 focus:outline-none focus:border-nexusGreen focus:ring-1 focus:ring-nexusGreen transition-all">
                        <div class="w-12 h-12 bg-[#171717] rounded-lg border border-white/10 flex items-center justify-center text-gray-600">
                            <i class="fa-solid fa-image"></i>
                        </div>
                    </div>
                </div>

                <div class="w-full h-[1px] bg-white/10 my-6"></div>

                <h3 class="text-white font-heading font-bold uppercase text-lg mb-4 flex items-center gap-2">
                    <i class="fa-solid fa-gamepad text-nexusGreen"></i> Main Game & Rank
                </h3>

                <div class="space-y-2 mb-6">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-wider font-heading ml-1">Select Main Game</label>
                    <div class="grid grid-cols-2 gap-4">
                        
                        <div class="relative">
                            <input type="radio" name="game_playing" id="game_val" value="Valorant" class="game-radio peer sr-only" required>
                            <label for="game_val" class="flex flex-col items-center justify-center gap-3 p-4 bg-[#171717] border border-white/10 rounded-xl cursor-pointer hover:bg-[#1a1a1a] transition-all h-32 group">
                                <img src="https://images.seeklogo.com/logo-png/37/2/valorant-logo-png_seeklogo-379976.png" class="h-12 w-auto object-contain opacity-80 group-hover:opacity-100 transition-opacity">
                                <span class="text-xs font-bold uppercase tracking-widest text-gray-400 group-hover:text-white">Valorant</span>
                                <i class="hidden fa-solid fa-circle-check text-nexusGreen absolute top-3 right-3 text-lg"></i>
                            </label>
                        </div>

                        <div class="relative">
                            <input type="radio" name="game_playing" id="game_cs2" value="CS2" class="game-radio peer sr-only">
                            <label for="game_cs2" class="flex flex-col items-center justify-center gap-3 p-4 bg-[#171717] border border-white/10 rounded-xl cursor-pointer hover:bg-[#1a1a1a] transition-all h-32 group">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmZOYiYZnbH7Lcvy3VrbB1dCYJp5t3d0kqSA&s" class="h-12 w-auto object-contain opacity-80 group-hover:opacity-100 transition-opacity rounded">
                                <span class="text-xs font-bold uppercase tracking-widest text-gray-400 group-hover:text-white">CS:GO 2</span>
                                <i class="hidden fa-solid fa-circle-check text-nexusGreen absolute top-3 right-3 text-lg"></i>
                            </label>
                        </div>

                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-wider font-heading ml-1">Current Rank</label>
                    <div class="relative group/input">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 group-focus-within/input:text-nexusGreen transition-colors">
                            <i class="fa-solid fa-trophy"></i>
                        </div>
                        <input type="text" name="rank" placeholder="e.g. Diamond II" required class="w-full bg-[#171717] border border-white/10 rounded-lg py-3 pl-12 pr-4 text-white placeholder-gray-600 focus:outline-none focus:border-nexusGreen focus:ring-1 focus:ring-nexusGreen transition-all">
                    </div>
                </div>

                <button type="submit" class="w-full bg-nexusGreen text-black font-heading font-black text-xl uppercase tracking-wider py-4 rounded-lg hover:bg-white hover:scale-[1.02] transition-all shadow-[0_0_15px_rgba(207,255,4,0.3)] hover:shadow-[0_0_25px_rgba(207,255,4,0.5)] mt-6">
                    Confirm Registration
                </button>

                <p class="text-center text-gray-500 text-sm mt-4">
                    Already have an account? <a href="login.php" class="text-nexusGreen hover:underline">Log In</a>
                </p>

            </form>
        </div>
    </main>

</body>
</html>