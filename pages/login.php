<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEXUS | System Access</title>
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
        
        /* Input Autofill Fix for Dark Mode */
        input:-webkit-autofill,
        input:-webkit-autofill:hover, 
        input:-webkit-autofill:focus, 
        input:-webkit-autofill:active{
            -webkit-box-shadow: 0 0 0 30px #171717 inset !important;
            -webkit-text-fill-color: white !important;
            transition: background-color 5000s ease-in-out 0s;
        }
    </style>
</head>
<body class="text-white font-body h-screen w-full flex flex-col relative overflow-hidden">

    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-nexusGreen/10 blur-[120px] rounded-full pointer-events-none -z-10"></div>

    <nav class="absolute top-0 left-0 w-full p-6 z-20">
        <a href="index.html" class="flex items-center gap-3 w-max opacity-70 hover:opacity-100 transition-opacity">
            <div class="w-8 h-8 bg-nexusGreen text-black flex items-center justify-center rounded skew-x-[-10deg]">
                <i class="fa-solid fa-bolt text-lg skew-x-[10deg]"></i>
            </div>
            <span class="text-xl font-black font-heading tracking-widest text-white uppercase">Nexus</span>
        </a>
    </nav>

    <main class="flex-grow flex items-center justify-center px-4 relative z-10">
        
        <div class="w-full max-w-md bg-[#0F0F0F] border border-white/10 p-8 md:p-10 rounded-2xl shadow-[0_0_50px_rgba(0,0,0,0.8)] relative overflow-hidden group">
            
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-nexusGreen to-transparent opacity-50"></div>

            <div class="text-center mb-10">
                <h1 class="text-4xl font-black font-heading uppercase text-white mb-2 tracking-wide">
                    System <span class="text-nexusGreen">Access</span>
                </h1>
                <p class="text-gray-500 text-sm">Enter your credentials to sync with the network.</p>
            </div>

            <form action="../Includes/login.php" method="POST" class="space-y-6">
                
                <div class="space-y-2">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-wider font-heading ml-1">Email</label>
                    <div class="relative group/input">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 group-focus-within/input:text-nexusGreen transition-colors">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <input type="text" name="email" placeholder="agent@nexus.gg" class="w-full bg-[#171717] border border-white/10 rounded-lg py-4 pl-12 pr-4 text-white placeholder-gray-600 focus:outline-none focus:border-nexusGreen focus:ring-1 focus:ring-nexusGreen transition-all">
                    </div>
                </div>

                <div class="space-y-2">
                    <div class="flex justify-between items-center ml-1">
                        <label class="text-xs font-bold text-gray-400 uppercase tracking-wider font-heading">Password</label>
                        <a href="#" class="text-xs text-nexusGreen hover:text-white transition-colors">Forgot code?</a>
                    </div>
                    <div class="relative group/input">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 group-focus-within/input:text-nexusGreen transition-colors">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <input type="password" name="password" placeholder="••••••••" class="w-full bg-[#171717] border border-white/10 rounded-lg py-4 pl-12 pr-4 text-white placeholder-gray-600 focus:outline-none focus:border-nexusGreen focus:ring-1 focus:ring-nexusGreen transition-all">
                    </div>
                </div>

                <button type="submit" class="w-full bg-nexusGreen text-black font-heading font-black text-xl uppercase tracking-wider py-4 rounded-lg hover:bg-white hover:scale-[1.02] transition-all shadow-[0_0_15px_rgba(207,255,4,0.3)] hover:shadow-[0_0_25px_rgba(207,255,4,0.5)] mt-4">
                    Initialize Login
                </button>

            </form>

     

            <div class="mt-8 text-center">
                <p class="text-gray-500 text-sm">
                    New Agent? 
                    <a href="register.php" class="text-nexusGreen font-bold hover:underline hover:text-white transition-colors">Apply for Access</a>
                </p>
            </div>

        </div>
    </main>
<script>
    
</script>
</body>
</html>