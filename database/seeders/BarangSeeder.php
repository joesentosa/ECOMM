<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BarangModel;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        BarangModel::insert([
            'namaBarang' => 'Akko Naruto Shippuden-Naruto 3108v2 Gaming Keyboard',
            'stok'    => '10',
            'harga' => 1090000,
            'berat' => 2,
            'review' => 'Naruto Shippuden Official Authorized Design
                Just the Right Size, AKKO 3084 comes with a compact and space-saving laptop-like layout and is full-feature.

                Type-C Detactable Cable
                The keyboard comes with a detachable USB Type-C cable, and can connect to any Type-C supported device.

                Three Adjustable Heights for Ergonomic Choice
                The design of two-stage keyboard stands with three height options allows you to explore the most suitable typing position.

                Stable and Straight Large Keycaps
                AKKO constantly endeavors to improve the stability of large keycaps, and is making progress to enchance the reliability of stabilizers to deliver better typing experiences on large keycaps.

                Macro Setting: For example, how to set the “A” as “123”?
                Step 1: Long press Fn + left win key to enter macro setting layer.
                Step 2: Press Fn + Esc to enter the macro mode. In this mode, long press Fn + A key can delete the A key definition.
                Step 3: Press Fn + A key to start to define the A key.
                Step 4: Enter the 123
                Step 5: Press Fn + A key to finish the record.
                Step 6: Press Fn + Esc again to exit the macro mode.

                Note:
                The macro key only can work in the macro setting layer, long press Fn + left win key can enter the macro setting layer, long press again can exit this mode.
                Esc/Fn/left Win key can not be defined.',
            'rating' => 3,
            'fk_id_brand' => 37,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Akko Naruto Shippuden-Sasuke 3108v2 Gaming Keyboard',
            'stok'    => '10',
            'harga' => 1090000,
            'berat' => 2,
            'review' => 'Naruto Shippuden Official Authorized Design
                Just the Right Size, AKKO 3084 comes with a compact and space-saving laptop-like layout and is full-feature.

                Type-C Detactable Cable
                The keyboard comes with a detachable USB Type-C cable, and can connect to any Type-C supported device.

                Three Adjustable Heights for Ergonomic Choice
                The design of two-stage keyboard stands with three height options allows you to explore the most suitable typing position.

                Stable and Straight Large Keycaps
                AKKO constantly endeavors to improve the stability of large keycaps, and is making progress to enchance the reliability of stabilizers to deliver better typing experiences on large keycaps.

                Macro Setting: For example, how to set the “A” as “123”?
                Step 1: Long press Fn + left win key to enter macro setting layer.
                Step 2: Press Fn + Esc to enter the macro mode. In this mode, long press Fn + A key can delete the A key definition.
                Step 3: Press Fn + A key to start to define the A key.
                Step 4: Enter the 123
                Step 5: Press Fn + A key to finish the record.
                Step 6: Press Fn + Esc again to exit the macro mode.

                Note:
                The macro key only can work in the macro setting layer, long press Fn + left win key can enter the macro setting layer, long press again can exit this mode.
                Esc/Fn/left Win key can not be defined.',
            'rating' => 4,
            'fk_id_brand' => 37,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Akko Ocean Star 3068 SP Gaming Keyboard',
            'stok'    => '10',
            'harga' => 990000,
            'berat' => 1,
            'review' => 'About the Akko SP series
                SP (Special) is a unique design series of Akko side-printed family. Coupled with the novelty keycap set and our polished color combinations, the SP series highlights its motivation to turn designs alive, and make your life special.

                Stylish Ocean Star Design
                Inspired by the sea waves, the two blues show the colors of the waves behind the waves pushing the waves in front, while the white as an ornament shows the colors of the sea foam after the waves hit.
                Ocean star allow you to hold the sea in your hands.

                Cherry Switch
                Using the Cherry switch, considered the classic mechanical keyboard switch. Its comfortable feel, stable performance and core technology double its quality.

                85% PBT-The Optimezed Combination
                AKKO produces PBT keycap with 85% PBT plastic, giving full play to the characteristics of PBT material such as dry and strong resistance to “shine” (oil feeling) with optimized typing comfort.

                Synchronized AKKO Macro
                Use full key programming chipset, support AKKO Macro full key programming system, support firmware update, can constantly modify and enchance functions, provides longer use life.

                Side Letter Carved Design
                Different from the common keyborad, 3068 carve all letters on the side of each keys. Easy to recognize when you sit in front of it.

                Supplementary Keycaps
                Imcluded 9 supplementary keycap, allow you design your own keyboard.',
            'rating' => 5,
            'fk_id_brand' => 37,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Akko One Piece Chopper 3084 Gaming Keyboard',
            'stok'    => '10',
            'harga' => 1049000,
            'berat' => 1,
            'review' => 'With One-Piece Copyright Licensing in Mainland China
                Just the Right Size, AKKO 3084 comes with a compact and space-saving laptop-like layout and is full-feature.

                Type-C Detactable Cable
                The keyboard comes with a detachable USB Type-C cable, and can connect to any Type-C supported device.

                Three Adjustable Heights for Ergonomic Choice
                The design of two-stage keyboard stands with three height options allows you to explore the most suitable typing position.

                85% PBT-The Optimezed Combination
                AKKO produces PBT keycap with 85% PBT plastic, giving full play to the characteristics of PBT material such as dry and strong resistance to “shine” (oil feeling) with optimized typing comfort.

                Stable and Straight Large Keycaps
                AKKO constantly endeavors to improve the stability of large keycaps, and is making progress to enchance the reliability of stabilizers to deliver better typing experiences on large keycaps.',
            'rating' => 5,
            'fk_id_brand' => 37,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Akko World Tour-Tokyo 3084 Gaming Keyboard',
            'stok'    => '10',
            'harga' => 949000,
            'berat' => 1,
            'review' => 'Tokyo Style Special Design
                Just the Right Size, AKKO 3084 comes with a compact and space-saving laptop-like layout and is full-feature.

                Type-C Detactable Cable
                The keyboard comes with a detachable USB Type-C cable, and can connect to any Type-C supported device.

                Three Adjustable Heights for Ergonomic Choice
                The design of two-stage keyboard stands with three height options allows you to explore the most suitable typing position.

                85% PBT-The Optimezed Combination
                AKKO produces PBT keycap with 85% PBT plastic, giving full play to the characteristics of PBT material such as dry and strong resistance to “shine” (oil feeling) with optimized typing comfort.

                Stable and Straight Large Keycaps
                AKKO constantly endeavors to improve the stability of large keycaps, and is making progress to enchance the reliability of stabilizers to deliver better typing experiences on large keycaps.',
            'rating' => 5,
            'fk_id_brand' => 37,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Corsair K70 RGB MK.2 Cherry MX Low Profile Rapidfire',
            'stok'    => '10',
            'harga' => 1899000,
            'berat' => 3,
            'review' => 'The K70 RGB MK.2 Low Profile RAPIDFIRE Mechanical Gaming Keyboard combines the comfort of low-profile, low travel keys, with the performance of ultra-fast CHERRY® MX mechanical keyswitches and stunning RGB lighting.

                Play On. And On. And On
                Gaming keyboard comfort has leveled up! By optimizing your palm position through lower key height and accessibility optimized multimedia controls, the all new Low Profile keyboard design brings your palms closer to a parallel position for a more natural feel.

                THE KEY TO COMFORT
                Get the performance you need with CORSAIR exclusive Low Profile CHERRY® MX Speed mechanical keyswitches. The Low Profile design provides the precision you expect from a CHERRY® keyswitch with a 35% lower key height.

                LEAN AND MEAN
                New slim, light-weight design and durable aircraft-grade aluminum frame, built to withstand a lifetime of gaming at just 29mm tall.

                Dynamic Multicolor Per-Key Backlighting
                Multi-color RGB per-key backlighting, now brighter than ever thanks to redesigned Low Profile keyswitches.
                Volume and Multimedia Controls
                Control to adjust audio on-the-fly, without interrupting your game.

                USB Pass-Through Port
                Provides convenient access to an additional USB port for your mouse or headset.
                8MB Profile Storage with Hardware Playback
                Allow access up to three stored profiles on the go, independent of external software.

                FPS and MOBA Keycap Sets
                Textured and contoured keycaps provide maximum grip and enhanced feel
                Detachable Soft-Touch Palm Rest
                The comfort to enhance your gameplay during the longest gaming session.

                Intelligent Control. Unlimited Possibilities.
                CORSAIR iCUE software enables vivid dynamic lighting control, sophisticated macro programming and full-system lighting synchronization across compatible CORSAIR peripherals, coolers, fans and more.',
            'rating' => 4.5,
            'fk_id_brand' => 12,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Corsair K60 RGB Pro Mechanical Cherry Viola Gaming Keyboard',
            'stok'    => '10',
            'harga' => 1199000,
            'berat' => 2,
            'review' => 'The CORSAIR K60 RGB PRO Mechanical Gaming Keyboard is built for both style and substance with a durable brushed aluminum frame and CHERRY VIOLA mechanical keyswitches that let your vivid per-key RGB backlighting shine through.

            YOUR LIGHTING, YOUR WAY
            Illuminate your desktop with vivid RGB backlighting.
            Programmable with CORSAIR iCUE Software
            Vivid dynamic RGB lighting control, sophisticated macro programming, and full system lighting synchronization compatible with CORSAIR peripherals, coolers, fans, and more. Experience an unparalleled level of immersion when playing iCUE-integrated games, as your RGB lighting dynamically reacts to in-game actions and events in real-time.
            Switch through various profiles: Rain, Water Color, Visor, Color Pulse, Rainbow

            100% CHERRY VIOLA Switches
            With decades of experience, CHERRY has a storied legacy as the choice of gamers and esports professionals worldwide. German-engineered and manufactured, CHERRY keyswitches are built to withstand a lifetime of gaming, with guaranteed reliability and a consistent key press feel for the full life of the keyswitch.

            BEAUTY AND BRAWN
            Built with a brushed aluminum frame with black anodization for a stylish, modern look and years of battle-tested durability.

            PLAY YOUR WAY
            Windows Key Lock Mode, Guarantees you’ll never accidentally interrupt your game at critical moments.
            Full N-Key Rollover (NKRO) with 100% Anti-Ghosting, Ensures that every keypress registers, no matter how fast you play.
            Convenient Keyboard Shortcuts, Control media playback, volume, and onboard lighting on-the-fly.
            Standard Bottom Row, Standardized layout for keycap customization.

            Intelligent Control. Unlimited Possibilities.
            CORSAIR iCUE software enables vivid dynamic lighting control, sophisticated macro programming and full-system lighting synchronization across compatible CORSAIR peripherals, coolers, fans and more.',
            'rating' => 4.5,
            'fk_id_brand' => 12,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Corsair K68 Blue Led Cherry MX Blue',
            'stok'    => '10',
            'harga' => 899000,
            'berat' => 2,
            'review' => 'The CORSAIR K68 mechanical keyboard features 100% CHERRY MX Blue keyswitches with dynamic backlighting and dust and spill resistance (up to IP32) to enable a high performance gaming experience.

            ULTRA-DURABLE. MECHANICAL.
            The CORSAIR K68 mechanical keyboard features 100% CHERRY MX Blue keyswitches with dynamic backlighting and dust and spill resistance to enable a high performance gaming experience.

            DUST AND SPILL RESISTANT
            CORSAIR K68 is dust and drip resistant* so a spill will never slow you down. Play on.
            *Tested up to IP32 for dust and water resistance

            100% CHERRY MX BLUE KEYSWITCHES
            Gold contact CHERRY MX Blue mechanical gaming keyswitches deliver the ultimate performance and competitive advantage. 100% anti-ghosting with full key rollover ensures your commands and simultaneous keystrokes always register the way you intended.

            ILLUMINATION AT YOUR FINGERTIPS
            Brilliant BLUE backlighting paired with the powerful CORSAIR Utility Engine (iCUE) enables sophisticated macro programming and dynamic lighting effects.

            PERFECT YOUR BATTLESTATION
            Use dedicated volume and multimedia controls to adjust audio on-the-fly, without interrupting your game. Stay focused and prevent accidental Windows and Context Menu key presses with Windows Key lock mode.

            Intelligent Control. Unlimited Possibilities.
            CORSAIR iCUE software enables vivid dynamic lighting control, sophisticated macro programming and full-system lighting synchronization across compatible CORSAIR peripherals, coolers, fans and more.',
            'rating' => 4,
            'fk_id_brand' => 12,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Corsair K70 RGB MK.2 Cherry MX Blue',
            'stok'    => '10',
            'harga' => 1849000,
            'berat' => 3,
            'review' => 'The CORSAIR K70 RGB MK.2 is a premium mechanical gaming keyboard built to last, with an aluminum frame, CHERRY® MX keyswitches and stunning per-key RGB dynamic backlighting.

            CHERRY® MX BLUE
            German-made CHERRY® MX keyswitches provide the reliability and accuracy you demand with an audible and tactile response.

            PLAY YOUR WAY
            8MB PROFILE STORAGE WITH HARDWARE PLAYBACK
            Allows access up to three stored profiles on the go, independent of external software.

            PROGRAMMABLE WITH CORSAIR iCUE SOFTWARE
            Vivid dynamic RGB lighting control, sophisticated marco programming and full system lighting synchronization compatible CORSAIR peripherals, coolers, fans, and more.

            DURABLE ALUMINUM FRAME
            An aircraft-grade brushed anodized aluminum frame provides lightweight and rugged durability, built to last thousands of hours of gameplay.

            FPS AND MOBA KEYCAP SETS
            Textured and contoured keycaps provide maximum grip and enhanced feel.

            100% ANTI-GHOSTING WITH FULL-KEY ROLLOVER
            No matter how fast your in-game actions are, every keypress registers correctly.

            WINDOWS KEY LOCK MODE
            Stay focused and prevent accidental Windows and Context Menu key presses.

            USB PASS-THROUGH PORT
            Convenient access to an additional USB port for your mouse or headset.

            DEDICATED VOLUME AND MULTIMEDIA CONTROLS
            The comfort to enhance your gameplay during the longest gaming session.

            DETACHABLE, SOFT-TOUCH WRIST REST
            The comfort to enhance your gameplay during the longest gaming session.

            Intelligent Control. Unlimited Possibilities.
            CORSAIR iCUE software enables vivid dynamic lighting control, sophisticated macro programming and full-system lighting synchronization across compatible CORSAIR peripherals, coolers, fans and more.',
            'rating' => 4,
            'fk_id_brand' => 12,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Corsair K63 Red Led Cherry MX Red',
            'stok'    => '10',
            'harga' => 980000,
            'berat' => 2,
            'review' => 'The CORSAIR K63 features a tenkeyless design and CHERRY MX Red mechanical keyswitches for ultimate performance. Brilliant per-key, red LED backlighting enables dynamic and virtually unlimited lighting adjustability.

            MECHANICAL PRECISION. COMPACT DESIGN.
            The CORSAIR K63 features a tenkeyless design and CHERRY® MX Red mechanical keyswitches for ultimate performance. Brilliant per-key, red LED backlighting enables dynamic and virtually unlimited lighting adjustability.

            Gold contact CHERRY® MX mechanical gaming keyswitches deliver the ultimate performance and competitive advantage.
            Brilliant red LED backlighting enhances the experience with dynamic and virtually unlimited lighting adjustability.
            Control to adjust audio on-the-fly without interrupting your game. Use the dedicated volume and multimedia controls to adjust your audio without interrupting your game.
            No matter how fast your in-game actions are, your keystrokes always register the way you intended.
            Fully programmable with iCUE to assign macros to any key and create dynamic lighting effects.

            KEYS TO SUCCESS
            Gold contact CHERRY® MX mechanical gaming keyswitches deliver the ultimate performance and competitive advantage. 100% anti-ghosting with full key rollover ensures your commands and simultaneous keystrokes always register the way you intended.

            MAKE IT YOUR OWN
            Experience dynamic, vibrant backlighting with advanced, per-key lighting control and large font keycaps. Assign macros to any key and create dynamic lighting effects with CORSAIR Utility Engine (iCUE).

            COMPACT DESIGN
            The K63 is designed for optimal desk space and easier travel.

            DESIGNED FOR COMFORT AND EASE
            The K63’s Windows Key Lock mode eliminates distraction by disabling the Windows key while you’re in action.

            Intelligent Control. Unlimited Possibilities.
            CORSAIR iCUE software enables vivid dynamic lighting control, sophisticated macro programming and full-system lighting synchronization across compatible CORSAIR peripherals, coolers, fans and more.',
            'rating' => 3,
            'fk_id_brand' => 12,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Dareu A87 KOBE TKL Gaming Keyboard',
            'stok'    => '10',
            'harga' => 1049000,
            'berat' => 2,
            'review' => 'A87 Kobe Edition
            Tenkeyless Mechanical Keyboard

            HIGH QUALITY CHERRY MX MECHANICAL SWITCH UP TO 50 MILLION CLICKS
            The A87 KB Tenkeyless, gaming keyboard already equipped with Cherry MX Mechanical Switch that can hold up until 50 Million Clicks.

            DETACHABLE TOP COVER
            The top cover can be detachable. It is convenient to disassemble cleaning and replacement.

            PBT MATERIAL KEYCAPS & N-KEY ROLLOVER
            Wear resistance character and it will not cause greasy hand feeling. Support N-Key Rollover to avoid ghosting.

            USB TYPE-C INTERFACED
            USB to type-C interfaced and detachable.',
            'rating' => 3.5,
            'fk_id_brand' => 13,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Dareu A87 Swallow TKL Gaming Keyboard',
            'stok'    => '10',
            'harga' => 1225000,
            'berat' => 2,
            'review' => 'A87 SWALLOW Theme Edition
            Tenkeyless Mechanical Keyboard

            HIGH QUALITY CHERRY MX MECHANICAL SWITCH UP TO 50 MILLION CLICKS
            The A87 Swallow Theme Tenkeyless, gaming keyboard already equipped with Cherry MX Mechanical Switch that can hold up until 50 Million Clicks.

            DETACHABLE TOP COVER
            The top cover can be detachable. It is convenient to disassemble cleaning and replacement.

            PBT MATERIAL KEYCAPS & N-KEY ROLLOVER
            Wear resistance character and it will not cause greasy hand feeling. Support N-Key Rollover to avoid ghosting.

            USB TYPE-C INTERFACED
            USB to type-C interfaced and detachable.',
            'rating' => 4,
            'fk_id_brand' => 13,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Dareu EK1280 Gaming Keyboard',
            'stok'    => '10',
            'harga' => 610000,
            'berat' => 2,
            'review' => 'HIGH QUALITY MECHANICAL SWITCH UP TO 50 MILLION CLICKS
            The EK-1280 Fullsize 104-Key gaming keyboard already equipped with Mechanical D-Switch that can hold up until 50 Million Clicks.

            Adjustable RGB backlight system
            Adjustable RGB backlight system, EK-1280 Fullsize is equipped with LED control buttons with many different effects.

            16,8 MILLION RGB LED COLOR SYSTEM
            Customize from a full spectrum of approximetly 16.8 million RGB LED Color System.

            READY WITH 3 TYPES OF SWITCHES
            Dareu Switch provides all three basic types of switches, Blue, Brown, and Red.

            Double Color Injection Keycap
            Double color injection-molded light-transmitting keycaps with dense particles on the surface, even and delicate, with a smooth, delicate feel. The biggest advantage of the double color ABS transparent keycap is that the characters are resistant to wear, and the keycaps are not the same as the previous coated keycaps, which will occur light leakage after long-term wear and tear, and the life will be greatly improved.

            MINIMALIST DESIGN,WITH METAL FRAME
            A minimalist design. Easy to use with a metal frame made of strong steel to help the keyboard be stable. Anti-vibration when typing protects the device safe from shocks sudden action.',
            'rating' => 3.5,
            'fk_id_brand' => 13,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Dareu EK169 Gaming Keyboard',
            'stok'    => '10',
            'harga' => 410000,
            'berat' => 1,
            'review' => 'Mechanical Switch
            D-switch up to 50 million clicks
            The EK-169 gaming keyboard already equipped with Mechanical D-Switch Clicky, that can hold up until 50 Million Clicks.

            Rainbow backlight system
            EK-169 Gaming Keyboard already have Keys Combination Function that can be activated by pressing FN key. You can change the modes of rainbow backlight system + light bar on two side.

            Simplify and Compact Design
            The design of this keyboard.

            Fullsize Mechanical Gaming Keyboard N-Key Rollover
            EK-169 Gaming Keyboard has N-Key Rollover. This enables every key to be pressed simultaneously on the keyboard while avoiding the possibility of ghosting.',
            'rating' => 4,
            'fk_id_brand' => 13,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Dareu EK812 Gaming Keyboard',
            'stok'    => '10',
            'harga' => 625000,
            'berat' => 1,
            'review' => 'D switch up to 80 million clicks
            The EK812 gaming keyboard already equipped with Optical D Switch that can hold up until 80 Million Clicks.

            Rainbow backlight system
            You can customized the rainbow backlight of this keyboard whenever you like.

            Simplify and Compact Design
            The Design of this keyboard . In order to achieve different visual effects, the lamp strip design is added on the left and right sides, and the ice blue light is matched with multiple sets of light patterns, and the whole light can make you feel different.

            COMBINATION FUNCTION
            EK-812 Gaming Keyboard already have Keys Combination Function that can be activated by pressing FN key. You can change the modes of rainbow lighting, turn on or turn off the rainbow lighting, speed up or down, and many more function.',
            'rating' => 4,
            'fk_id_brand' => 13,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Digital Alliance Meca 8 TKL with Numeric Gaming Keyboard',
            'stok'    => '10',
            'harga' => 399000,
            'berat' => 1,
            'review' => 'Meca Fighter Rainbow merupakan keyboard gaming best value dari Digital Alliance.
            Ukuran pendek dan dengan desain yang sangat praktis, karena besel keyboard bagian atas dapat kita gunakan sebagai penyangga ponsel. Menggunakan switch Outemu dangan tiga pilihan yakni Red, Blue ataupun Brown switch.

            Warna keyboard hitam tenkeyless tanpa numpad, top cover dari ABS plastik sehingga tidak terlalu berat meskipun Meca Fighter adalah keyboard mechanical.',
            'rating' => 4,
            'fk_id_brand' => 3,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Digital Alliance Meca Fighter Gaming Keyboard',
            'stok'    => '10',
            'harga' => 290000,
            'berat' => 1,
            'review' => 'Meca Fighter Rainbow merupakan keyboard gaming best value dari Digital Alliance.
            Ukuran pendek dan dengan desain yang sangat praktis, karena besel keyboard bagian atas dapat kita gunakan sebagai penyangga ponsel. Menggunakan switch Outemu dangan tiga pilihan yakni Red, Blue ataupun Brown switch.

            Warna keyboard hitam tenkeyless tanpa numpad, top cover dari ABS plastik sehingga tidak terlalu berat meskipun Meca Fighter adalah keyboard mechanical.',
            'rating' => 3.5,
            'fk_id_brand' => 3,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Digital Alliance Meca Fighter V2 Gaming Keyboard',
            'stok'    => '10',
            'harga' => 290000,
            'berat' => 1,
            'review' => 'Meca Fighter V2 Rainbow merupakan keyboard gaming best value dari Digital Alliance. Upgrade lampu backlit perzona, bukan perbaris.
            Ukuran tenkeyless tanpa numpad dan dengan desain yang sangat praktis, karena besel keyboard bagian atas dapat kita gunakan sebagai penyangga ponsel. Menggunakan switch Outemu dangan tiga pilihan yakni Red, Blue ataupun Brown switch.

            Warna keyboard hitam doff, top cover dari ABS plastik sehingga bobot dari keyboard ini tidak terlalu berat meskipun Meca Fighter adalah tergolong keyboard mechanical.',
            'rating' => 3,
            'fk_id_brand' => 3,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Digital Alliance Meca Meca Shield Ice Gaming Keyboard',
            'stok'    => '10',
            'harga' => 399000,
            'berat' => 1,
            'review' => 'Keyboard Meca Shield Ice, mechanical dengan model solid berwarna putih yang sejuk seperti salju pasti bisa mendinginkan suasana yang panas, apalagi keyboard ini simple dan desainnya yang ciamik enak buat dipegang dengan bentuknya yang futuristik, dan pastinya nyaman banget',
            'rating' => 3,
            'fk_id_brand' => 3,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Digital Alliance Meca Warrior Gaming Keyboard',
            'stok'    => '10',
            'harga' => 360000,
            'berat' => 1,
            'review' => 'Meca Warrior Rainbow merupakan keyboard gaming best value dari Digital Alliance.
            Meca Warrior Rainbow adalah keyboard gaming yang di desain sesuai tangan para gamer. Sangat cocok bagi para gamers agar lebih nyaman dalam bermain game, atau kebutuhan multimedia dan perkantoran.

            Warna keyboard hitam tenkeyless tanpa numpad, top cover dari ABS plastik sehingga tidak terlalu berat meskipun Meca Warrior adalah keyboard mechanical.',
            'rating' => 2,
            'fk_id_brand' => 3,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Ducky One 2 Horizon TKL Gaming Keyboard',
            'stok'    => '10',
            'harga' => 1435000,
            'berat' => 2,
            'review' => 'A Keyboard Designed for Everyone
            The new bezel design shares a similar sleek frame as it’s predecessor, but the One 2 incorporates dual colors on the bezel to match all varieties of keycap colorways.

            Durable　Exceptional　Reliable Performance

            PBT double-shot seamless keycaps
            German Cherry MX key switches

            Detachable USB Type-C
            We use USB HID with the highest frequency of 1000Hz polling rate, meaning the keyboard is sending its input signal(s) to your PC 1000 times per second.

            Optimize comfortability
            3 level angle adjustment keyboard stand

            Independent keyboard indicator lights
            To alert you when Number lock, Caps lock, Scroll lock & Mouse Functions are on',
            'rating' => 2,
            'fk_id_brand' => 27,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Ducky Mecha Mini RGB Black Gaming Keyboard',
            'stok'    => '10',
            'harga' => 1820000,
            'berat' => 2,
            'review' => 'MINIATURE DESIGN
            Full aluminum casing
            The new bezel design shares a similar sleek frame as its predecessor.

            TYPING EXPERIENCE
            Durable　exceptional　reliable performance
            PBT double-shot seamless keycaps
            German Cherry MX key switches.

            INTERFACE
            Detachable
            USB Type-C
            We use USB HID with the highest frequency of 1000Hz polling rate, meaning the keyboard is sending its input signal(s) to your PC 1000 times per second.

            ADVANCED TECHNOLOGY
            Brighter performance
            Anti-Ghosting
            4-layer PCB
            Utilizes 3528 SMD RGB LED
            Longer life expectancy & signal stability
            Handle any number of simultaneous key presses with the option of N-key or 6-Key Rollover.

            SENSUOUS LIGHTING EFFECT
            Diversified
            RGB light effects
            With fully customizable hardware',
            'rating' => 2,
            'fk_id_brand' => 27,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Ducky One 2 Midnight TKL Gaming Keyboard',
            'stok'    => '10',
            'harga' => 1435000,
            'berat' => 2,
            'review' => 'A Keyboard Designed for Everyone
            The new bezel design shares a similar sleek frame as it’s predecessor, but the One 2 incorporates dual colors on the bezel to match all varieties of keycap colorways.

            Durable　Exceptional　Reliable Performance
            PBT double-shot seamless keycaps
            German Cherry MX key switches

            Detachable USB Type-C
            We use USB HID with the highest frequency of 1000Hz polling rate, meaning the keyboard is sending its input signal(s) to your PC 1000 times per second.

            Optimize comfortability
            3 level angle adjustment keyboard stand

            Independent keyboard indicator lights
            To alert you when Number lock, Caps lock, Scroll lock & Mouse Functions are on',
            'rating' => 2,
            'fk_id_brand' => 27,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Ducky One 2 Mini RGB Black Gaming Keyboard',
            'stok'    => '10',
            'harga' => 1675000,
            'berat' => 2,
            'review' => 'All New Petite Bezel Design
            The new bezel design shares a similar sleek frame as its predecessor.

            Durable　Exceptional　Reliable Performance
            PBT double-shot seamless keycaps
            German Cherry MX key switches

            Detachable USB Type-C
            We use USB HID with the highest frequency of 1000Hz polling rate, meaning the keyboard is sending its input signal(s) to your PC 1000 times per second.

            Optimized Comfortability
            3 level angle adjustment keyboard stand

            Diversified RGB light effects
            With fully customizable hardware

            Brighter performance, Anti-Ghosting, 4-layer PCB
            Utilizes 3528 SMD RGB LED
            Longer life expectancy & signal stability
            Handle any number of simultaneous key presses with the option of N-key or 6-Key Rollover',
            'rating' => 2,
            'fk_id_brand' => 27,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Ducky One 2 Mini RGB Pure White Gaming Keyboard',
            'stok'    => '10',
            'harga' => 1675000,
            'berat' => 2,
            'review' => 'All New Petite Bezel Design
            The new bezel design shares a similar sleek frame as its predecessor.

            Durable　Exceptional　Reliable Performance
            PBT double-shot seamless keycaps
            German Cherry MX key switches

            Detachable USB Type-C
            We use USB HID with the highest frequency of 1000Hz polling rate, meaning the keyboard is sending its input signal(s) to your PC 1000 times per second.

            Optimized Comfortability
            3 level angle adjustment keyboard stand

            Diversified RGB light effects
            With fully customizable hardware

            Brighter performance, Anti-Ghosting, 4-layer PCB
            Utilizes 3528 SMD RGB LED
            Longer life expectancy & signal stability
            Handle any number of simultaneous key presses with the option of N-key or 6-Key Rollover',
            'rating' => 2,
            'fk_id_brand' => 27,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Funsty Mini 60% RGB Black Case Blueswitch',
            'stok'    => '10',
            'harga' => 499000,
            'berat' => 1,
            'review' => '61 Keys mechanical keyboard, all key non-conflict,Constructed with 61 floating keys

            • every floating key with independent switch and LED light, full anti-ghosting, plug and play, No driver needed.

            • double-shot injection molded keycaps are LED backlit for razor sharp lighting that doesn’t scratch off. 100% anti-ghosting.

            • Outemo mechanical switches designed for longevity with greater durability and responsiveness.

            Multimedia controls on Function keys.

            • Supports Windows10, 8, Windows 7 or later operating systems.',
            'rating' => 2,
            'fk_id_brand' => 28,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Funsty Mini 60% RGB Black Case Brownswitch',
            'stok'    => '10',
            'harga' => 499000,
            'berat' => 1,
            'review' => '61 Keys mechanical keyboard, all key non-conflict,Constructed with 61 floating keys

            • every floating key with independent switch and LED light, full anti-ghosting, plug and play, No driver needed.

            • double-shot injection molded keycaps are LED backlit for razor sharp lighting that doesn’t scratch off. 100% anti-ghosting.

            • Outemo mechanical switches designed for longevity with greater durability and responsiveness.

            Multimedia controls on Function keys.

            • Supports Windows10, 8, Windows 7 or later operating systems.',
            'rating' => 2,
            'fk_id_brand' => 28,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Funsty Mini 60% RGB Black Case Redswitch',
            'stok'    => '10',
            'harga' => 499000,
            'berat' => 1,
            'review' => '61 Keys mechanical keyboard, all key non-conflict,Constructed with 61 floating keys

            • every floating key with independent switch and LED light, full anti-ghosting, plug and play, No driver needed.

            • double-shot injection molded keycaps are LED backlit for razor sharp lighting that doesn’t scratch off. 100% anti-ghosting.

            • Outemo mechanical switches designed for longevity with greater durability and responsiveness.

            Multimedia controls on Function keys.

            • Supports Windows10, 8, Windows 7 or later operating systems.',
            'rating' => 2,
            'fk_id_brand' => 28,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Funsty Mini 60% RGB White Case Blueswitch',
            'stok'    => '10',
            'harga' => 499000,
            'berat' => 1,
            'review' => '61 Keys mechanical keyboard, all key non-conflict,Constructed with 61 floating keys

            • every floating key with independent switch and LED light, full anti-ghosting, plug and play, No driver needed.

            • double-shot injection molded keycaps are LED backlit for razor sharp lighting that doesn’t scratch off. 100% anti-ghosting.

            • Outemo mechanical switches designed for longevity with greater durability and responsiveness.

            Multimedia controls on Function keys.

            • Supports Windows10, 8, Windows 7 or later operating systems.',
            'rating' => 2,
            'fk_id_brand' => 28,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Funsty Mini 60% RGB White Case Brownswitch',
            'stok'    => '10',
            'harga' => 499000,
            'berat' => 1,
            'review' => '61 Keys mechanical keyboard, all key non-conflict,Constructed with 61 floating keys

            • every floating key with independent switch and LED light, full anti-ghosting, plug and play, No driver needed.

            • double-shot injection molded keycaps are LED backlit for razor sharp lighting that doesn’t scratch off. 100% anti-ghosting.

            • Outemo mechanical switches designed for longevity with greater durability and responsiveness.

            Multimedia controls on Function keys.

            • Supports Windows10, 8, Windows 7 or later operating systems.',
            'rating' => 2,
            'fk_id_brand' => 28,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Hyperx Alloy Core RGB Gaming Keyboard',
            'stok'    => '10',
            'harga' => 750000,
            'berat' => 2,
            'review' => 'Featuring HyperX’s signature radiant light bar and smooth, dynamic RGB lighting effects, the HyperX Alloy Core RGB™ is ideal for gamers looking to enhance their keyboard’s style and performance without breaking the bank. With six different lighting effects and three brightness levels, it balances both brilliance and budget. Crafted with a durable, reinforced plastic frame, the Alloy Core RGB was constructed for stability and reliability for gamers who want a keyboard that will last. The soft-touch keys have a tactile feel, yet are tuned to be quiet, and they also feature gaming-grade anti-ghosting functionality and key rollover. It’s spill resistant, tested to withstand 120ml of liquid, so beverage accidents won’t put an end to your game. The dedicated media controls and quick-access buttons for lighting and Game Mode place control right at your fingertips. Keyboard Lock allows you to lock your keyboard down without having to put your entire system on standby. The Alloy Core RGB is stylish, well-featured and durable, making it a great all-around multimedia keyboard for gamers.

            5 Zones multi-color customization option
            Customize five zones of the keyboard with the color of your choice.
            Stunning radiance paired with six effect presets; Color Cycle, Spectrum Wave, Breathing, Solid, 5 Zones, and Aurora.

            Quiet, responsive keys with anti-ghosting functionality
            Comfortable, quiet keys with a tactile feel.

            Spill resistant keyboard with a durable frame
            Tested to resist up to 120ml of liquid and featuring a reinforced plastic frame.',
            'rating' => 3,
            'fk_id_brand' => 16,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Hyperx Alloy Elite 2 RGB Gaming Keyboard',
            'stok'    => '10',
            'harga' => 2090000,
            'berat' => 2,
            'review' => 'For gamers, streamers, and multi-taskers who need to have more control at their fingertips, the HyperX Alloy Elite™ 2 is the keyboard for you. With dedicated media keys and a large volume wheel, this fully-featured gaming keyboard’s ready for everything from video editing to watching movies. It’s built with ultra-reliable HyperX mechanical switches balanced for speed and responsiveness, so you can trust your key inputs. The switches’ exposed LEDs pair with the translucent HyperX Pudding Keycaps to give your RGB lighting extra brightness compared to solid-colour keycaps.

            Customise the signature light bar and create lighting profiles with intuitive HyperX NGENUITY software for a brilliant display of colours. Use the software to personalise your setup further with custom Game Mode and macros. A USB 2.0 pass-through provides an extra USB port for your multi-tasking needs. The Alloy Elite 2’s sturdy steel frame makes it durable enough for work and play day in and day out.

            HyperX Pudding Keycaps
            Pre-installed translucent ABS pudding keycaps provide more brilliance compared to solid-colour keycaps which let less of your style shine.

            HyperX Mechanical switches1
            These reliable key switches are a balance of responsiveness and accuracy, with a short travel time and actuation distance. They feature an exposed LED for brighter, more luminous RGB lighting.

            Signature light bar & dynamic RGB lighting effects
            The signature HyperX light bar and vibrant lighting effects form a truly dazzling display.

            Dedicated media keys and large volume wheel
            Have control at your fingertips with a prominent volume wheel and dedicated keys for media, profiles, and Game Mode.

            Solid steel frame
            The solid steel frame provides durability and the sturdy weight of the keyboard helps prevent slippage when the action heats up.

            Advanced customisation with HyperX NGENUITY
            Customise Game Mode, build macros, and set up per-key lighting and effects.

            USB 2.0 pass-through and 100% Anti-ghosting
            This fully-featured keyboard also has a USB 2.0 pass-through, 100% Anti-Ghosting, and N-Key rollover functionalities.

            Multi-platform compatibility
            The keyboard is compatible with PC, PS4™, and Xbox One™ via USB-A connection, so you can have one keyboard for both PC and console gaming.',
            'rating' => 4.5,
            'fk_id_brand' => 16,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Hyperx Alloy FPS',
            'stok'    => '10',
            'harga' => 1690000,
            'berat' => 2,
            'review' => 'HyperX™ Alloy FPS and Alloy FPS Pro1 are serious keyboards for serious players, engineered with an eye for durability, reliability, and accuracy. With their compact design, solid steel frame and CHERRY® MX keyswitches, the Alloy FPS family of keyboards is perfect for serious FPS play. Whether you prefer the lean and mean tenkeyless (TKL) design of the Alloy FPS Pro, or the full-sized Alloy FPS, both models feature dynamic HyperX red backlighting, 100% Anti-Ghosting, N-key rollover, and Game Mode. Get the gear that the pros trust, and equip yourself with a HyperX Alloy FPS keyboard today.

            Maximize your desktop real estate for rapid mouse movement. Built to stand the test of time and to stand fast when the action heats up.

            Available with CHERRY MX Blue, Brown, or Red keyswitches3, so you’ll get reliability and the switches that fit your needs.

            Ultra-portable design with detachable cable
            Detaches to reduce potential cable wear and tear and increase portability. Showcase your style with a keyboard that is lit both figuratively and literally.',
            'rating' => 3,
            'fk_id_brand' => 16,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Hyperx Alloy FPS Pro',
            'stok'    => '10',
            'harga' => 1590000,
            'berat' => 2,
            'review' => 'HyperX™ Alloy FPS and Alloy FPS Pro1 are serious keyboards for serious players, engineered with an eye for durability, reliability, and accuracy. With their compact design, solid steel frame and CHERRY® MX keyswitches, the Alloy FPS family of keyboards is perfect for serious FPS play. Whether you prefer the lean and mean tenkeyless (TKL) design of the Alloy FPS Pro, or the full-sized Alloy FPS, both models feature dynamic HyperX red backlighting, 100% Anti-Ghosting, N-key rollover, and Game Mode. Get the gear that the pros trust, and equip yourself with a HyperX Alloy FPS keyboard today.

            Maximize your desktop real estate for rapid mouse movement. Built to stand the test of time and to stand fast when the action heats up.

            Available with CHERRY MX Blue, Brown, or Red keyswitches3, so you’ll get reliability and the switches that fit your needs.

            Ultra-portable design with detachable cable
            Detaches to reduce potential cable wear and tear and increase portability. Showcase your style with a keyboard that is lit both figuratively and literally.',
            'rating' => 4.5,
            'fk_id_brand' => 16,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Hyperx Alloy FPS RGB',
            'stok'    => '10',
            'harga' => 1590000,
            'berat' => 2,
            'review' => 'HyperX alloy FPS RGB is a high-performance mechanical computer gaming Keyboard designed to enhance your gaming performance and keeping your desktop layout colorful with customizable RGB LED lighting effects. The HyperX Alloy FPS RGB can be customized with easy-to-use HyperX Ingenuity software to help make your keys pop and stand out. Save up to three profiles and switch easily by pressing the F1, F2, F3 keys to toggle between your different customization profiles. It features different effects and brightness levels to choose from. This RGB Gaming Keyboard is designed with durable solid steel frame and is compact to be ultra-portable with detachable cable so you can easily game on the go. Includes convenient USB port that charges only mobile phones so you’ll always have a fully charged phone while you game. about HyperX Ingenuity: hyperx Ingenuity is an easy-to-use software that allows you to personalize HyperX products. With compatible products, Ingenuity allows you to set up lighting ad effects, create and store macros, customize game mode, adjust mouse DPI settings, and monitor battery life and adjust audio. The software also comes with a library of game profile presets to get you started.

            Extra-bright RGB keys with dynamic effects
            Featuring an exposed LED on the key switch, customizable lighting effects, and five brightness levels.

            Compact, portable design with detachable cable
            Designed to optimize desktop real estate and portability

            Solid steel frame
            Built for reliability and for stability when the action heats up.

            Kailh Silver Speed keyswitches
            Durable mechanical keyswitches with a low actuation force for top-tier gaming performance.

            Pair with our HyperX Pudding Keycaps
            Enjoy enhanced brightness and durability like never before with the HyperX Double Shot PBT Keycaps.',
            'rating' => 5,
            'fk_id_brand' => 16,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Leopold FC650MDS PD White Blue Star Gaming Keyboard',
            'stok'    => '10',
            'harga' => 1445000,
            'berat' => 2,
            'review' => '',
            'rating' => 4,
            'fk_id_brand' => 29,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Leopold FC660M PD Swedish Yellow Blue White Gaming Keyboard',
            'stok'    => '10',
            'harga' => 1400000,
            'berat' => 2,
            'review' => '',
            'rating' => 3.5,
            'fk_id_brand' => 29,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Leopold FC660M PD White Blue Star Gaming Keyboard',
            'stok'    => '10',
            'harga' => 1400000,
            'berat' => 2,
            'review' => '',
            'rating' => 3.5,
            'fk_id_brand' => 29,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Leopold FC750R PD Gray and Purple Gaming Keyboard',
            'stok'    => '10',
            'harga' => 1565000,
            'berat' => 2,
            'review' => '',
            'rating' => 3.5,
            'fk_id_brand' => 29,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Leopold FC750R PD White Blue Star Gaming Keyboard',
            'stok'    => '10',
            'harga' => 1565000,
            'berat' => 2,
            'review' => '',
            'rating' => 3.5,
            'fk_id_brand' => 29,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Logitech Pro X 2019 RGB TKL Gaming Keyboard',
            'stok'    => '10',
            'harga' => 1829000,
            'berat' => 2,
            'review' => 'Speed. Accuracy. Durability. Logitech G gaming keyboards are designed with the technology and materials required for high performance gaming.

            KEYED FOR THE PROS
            The tournament-proven PRO X design—now with swappable pro-grade GX switches. Meet the customizable mechanical gaming keyboard built for the world’s top esports athletes.

            SWAPPABLE PRO-GRADE SWITCHES
            TENKEYLESS COMPACT DESIGN
            LIGHTSYNC PROGRAMMABLE RGB

            BUILT FOR PROS
            The pros asked, we listened. With a compact design and user-swappable pro-grade switches, PRO X is pro-tested, tournament-assured, and built to win.

            USER-SWAPPABLE PRO-GRADE SWITCHES
            Advanced GX Blue Clicky mechanical switches—engineered and 100% tested for performance, responsiveness, and durability.

            COMPACT +
            ULTRA-PORTABLE
            A tenkeyless design means more room for mouse movement. The durable, compact design is also easy to pack for travel to tournaments around the world.

            LIGHTSYNC RGB
            Highlight critical keys, or just show your team solidarity. Customize lighting and animations with Logitech G HUB software. PRO X Keyboard also allows you to save a static lighting design to onboard memory for use on tournament systems.

            DETACHABLE CABLE
            The micro USB cable detaches for safe transport in your travel bag, and features a three-pronged design for an easy, secure connection.

            3 ANGLES +
            RUBBER FEET
            When gaming gets intense, rubber feet help keep the keyboard in place. The three-step adjustment allows you to customize the angle of the keyboard to the position you find comfortable.

            12 PROGRAMMABLE
            F-KEY MACROS
            Program intricate, timed actions or commands to F1-F12 with Logitech G HUB.',
            'rating' => 5,
            'fk_id_brand' => 18,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Logitech G413 Carbon Gaming Keyboard',
            'stok'    => '10',
            'harga' => 1229000,
            'berat' => 2,
            'review' => 'keyboard ini memiliki desain simple dan elegan. Body keyboard berbahan aircraft grade aluminium alloy dengan corak carbon menambah kesan prestige dan elegan. Keycaps nya menggunakan model floating keycaps yang sangat nyaman digunakan. Switchnya menggunakan Romer G, switch ini memiliki feel seperti Cherry Mx Brown tetapi lebih ringan dan sedikit lebih silent. Switch ini diklaim mampu memangkas throw actuation sebanyak 25% dibanding kompetitor sehingga lebih responsive dan lebih tahan 20 juta kali keystrokes.

            Fitur anti ghosting dan 26 key NKRO sangat berguna untuk main game yang perlu kecepatan untuk menghindari input yang double. Keyboard ini juga mendapatkan fitur tambahan yaitu full programabale macro dan pengaturan brightness via Logitech Gaming Software',
            'rating' => 4,
            'fk_id_brand' => 18,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Logitech GPro TKL Gaming Keyboard',
            'stok'    => '10',
            'harga' => 1680000,
            'berat' => 2,
            'review' => 'G Pro Mechanical Gaming Keyboard menggunakan switch Romer-G garapan Logitech. Menurut Logitech, switch Romer-G memiliki kecepatan 25 persen lebih tinggi dibanding keyboard mekanikal pada umumnya.

            Selain itu, Logitech juga menyediakan sistem kabel yang bisa dilepas. Ini akan memudahkan para gamer ketika ingin membawa G Pro Mechanical Gaming Keyboard bepergian. Lampu RGB yang bisa dimodifikasi pun tak lupa ditanamkan.',
            'rating' => 4,
            'fk_id_brand' => 18,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'NYK K06 Tenkeyless',
            'stok'    => '10',
            'harga' => 150000,
            'berat' => 1,
            'review' => 'Keyboard ini mengusung jenis TKL, kelebihannya adalah lebih ramping dan lebih mudah dibawa kemana-mana, selain itu keyboard berjenis TKL sangat cocok untuk para Gamer FPS karena tidak begitu banyak memakan tempat.
            NYK K-06 menggunakan teknologi membrane yang dapat memungkinkan kita menekan beberapa tombol secara bersamaan karena telah di dukung dengan Anti-ghosting di 19 tombolnya.
            Kelebihan lainnya adalah keyboard ini dapat digunakan di Windows maupun MAC.',
            'rating' => 4,
            'fk_id_brand' => 19,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'NYK KM10 TKL Gaming Keyboard',
            'stok'    => '10',
            'harga' => 460000,
            'berat' => 1,
            'review' => 'Dengan menggunakan Outemu Blueswitch menjadikan keyboard TKL ini memiliki feel clicky dan juga sangat responsive dan tanpa delay..
            untuk tombolnya juga sudah didukung dengan Full anti-ghosting, yang memungkinkan kita menekan beberapa tombol secara bersamaan.. PBT doubleshot keycaps..
            *18 efek lampu dengan tingkat kecerahan bisa disesuaikan dengan akses tombol FN+
            *Dilengkapi dengan 12 tombol kontrol media khusus dan WIN Lock
            *Desain yang kokoh dan casing atas terbuat dari besi
            *Kaki keyboard dengan lapisan karet menjaga keyboard tetap berdiri kokoh pada meja',
            'rating' => 4,
            'fk_id_brand' => 19,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Razer Blackwidow V3 Gaming Keyboard',
            'stok'    => '10',
            'harga' => 2299000,
            'berat' => 1,
            'review' => 'Mechanical Gaming Keyboard with Razer Chroma RGB

            FEEL THE DIFFERENCE
            The name that started it all returns to reassert its dominance. Feel the difference with the Razer BlackWidow V3—backed by a legacy as the first and most iconic mechanical gaming keyboard, and armed with new, improved features including our world-renowned switches.

            RAZER™ MECHANICAL SWITCHES
            The Razer BlackWidow V3 is available in two variants:
            Razer™ Green Mechanical Switches
            Hear and feel the satisfying feedback in every keystroke you make, with a clicky, tactile design that offers optimized actuation and reset points for better precision and performance when gaming.

            Razer™ Yellow Mechanical Switches
            These linear, silent switches produce extremely smooth keystrokes with no tactile bump and include sound dampeners to reduce its already low sound profile even further.

            TRANSPARENT SWITCH HOUSING
            Its completely clear design provides brighter RGB lighting to display the true brilliance of what Razer Chroma™ RGB can do—from deep lighting customizations to greater immersion as it dynamically reacts with over 150 integrated games.

            DOUBLESHOT ABS KEYCAPS
            Using a doubleshot molding process to ensure the labelling never wears off, the keycaps on this wireless mechanical gaming keyboard also have extra-thick walls which make them extremely tough to withstand prolonged, repeated use.

            ALUMINUM CONSTRUCTION
            To complement its tough keycaps, the Razer BlackWidow V3’s topframe is tanky enough to take long hours of intense, regular use and has a clean matte finishing.
            MULTI-FUNCTION ROLLER WHEEL AND MEDIA KEY
            Configure them to pause, play, skip and tweak everything from brightness to volume—the ultimate convenience as you enjoy your entertainment.
            ERGONOMIC WRIST REST
            The sturdy wrist support perfectly aligns to the keyboard to relieve pressure on your wrists, so you feel less fatigued when gaming over long periods.
            CABLE ROUTING OPTIONS
            This mechanical gaming keyboard is designed with grooves that allow you to neatly tuck in its cable and feed it out in any direction, so you can keep your desktop clear of clutter and mess.',
            'rating' => 4,
            'fk_id_brand' => 20,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Razer Blackwidow V3 Pro Wireless Gaming Keyboard',
            'stok'    => '10',
            'harga' => 3799000,
            'berat' => 2,
            'review' => 'Wireless Full-height Mechanical Gaming Keyboard with Razer Chroma RGB

            FEEL THE DIFFERENCE. UNLEASHED.
            The world’s first and most iconic mechanical gaming keyboard makes its next game-changing evolution. Enter a new wireless meta with the Razer BlackWidow V3 Pro—with 3 modes of connection for unrivalled versatility, and a satisfying gaming experience comprised of best-in-class switches and full-height keys.

            RAZER™ HYPERSPEED WIRELESS
            This wireless mechanical gaming keyboard comes armed with our most advanced wireless technology for low-latency gaming and hyper-responsive inputs—made possible through an optimized data protocol, ultra-fast radio frequency and seamless frequency switching in the noisiest, data-saturated environments.

            3 MODES OF CONNECTION
            Go with Razer™ HyperSpeed for flawless wireless performance when gaming, or switch to Bluetooth and connect up to 3 devices—toggling between them seamlessly with just one switch. Includes detachable USB-C cable for charging during use.
            RAZER™ MECHANICAL SWITCHES
            The Razer BlackWidow V3 Pro is available in two variants:
            Razer™ Green Mechanical Switches
            Hear and feel the satisfying feedback in every keystroke you make, with a clicky, tactile design that offers optimized actuation and reset points for better precision and performance when gaming.

            Razer™ Yellow Mechanical Switches
            These linear, silent switches produce extremely smooth keystrokes with no tactile bump and include sound dampeners to reduce its already low sound profile even further.

            TRANSPARENT SWITCH HOUSING
            Its completely clear design provides brighter RGB lighting to display the true brilliance of what Razer Chroma™ RGB can do—from deep lighting customizations to greater immersion as it dynamically reacts with over 150 integrated games.

            DOUBLESHOT ABS KEYCAPS
            Using a doubleshot molding process to ensure the labelling never wears off, the keycaps on this wireless mechanical gaming keyboard also have extra-thick walls which make them extremely tough to withstand prolonged, repeated use.

            ALUMINUM CONSTRUCTION
            To complement its tough keycaps, the topframe of this wireless mechanical gaming keyboard is tanky enough to take long hours of intense, regular use and has a clean matte finishing.

            MULTI-FUNCTION DIGITAL DIAL AND 4 MEDIA KEYS
            Configure them to pause, play, skip and tweak everything from brightness to volume—the ultimate convenience as you enjoy your entertainment.

            PLUSH LEATHERETTE WRIST REST
            The soft, cushioned wrist support perfectly aligns to the keyboard to relieve pressure on your wrists, so you feel less fatigued when gaming over long periods.

            POWERED BY RAZER CHROMA RGB
            Personalize this RGB gaming keyboard with over 16.8 million colors and a suite of effects to choose from. Enjoy greater immersion with dynamic lighting effects that occur as you game on over 150 Chroma-integrated titles such as Fortnite, Apex Legends, Warframe, and more.',
            'rating' => 4,
            'fk_id_brand' => 20,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Razer Ornata Expert Pikachu Limited Edition Gaming Keyboard',
            'stok'    => '10',
            'harga' => 1749000,
            'berat' => 2,
            'review' => 'Razer | Pokémon – Pikachu Limited Edition Backlit Keyboard

            I Choose You!
            Wanna be the very best? Then be ready for any showdown with our signature Razer gear, evolved with iconic Pokémon style. Electrify your setup with our exclusive set of high-performance peripherals, inspired by the cutest and most beloved Pokémon of all time—Pikachu.

            BRILLIANT ACTUATION
            With individually backlit keys, the keyboard’s dynamic yellow lighting can be customized via Razer Synapse, while its Razer™ Mecha-Membrane Switches provide a satisfying typing experience that blends the soft, cushioned touch of rubber membrane keys with the crisp, tactile click of a mechanical switch.

            EVOLVED FOR COMFORT
            To minimize fatigue over long periods of use, the keyboard comes with an ergonomic wrist rest that adds a greater level of comfort and support—it’s Pikachu-inspired design creating the perfect vibe for any Pokémon fan.',
            'rating' => 4,
            'fk_id_brand' => 20,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Razer Tartarus Pro',
            'stok'    => '10',
            'harga' => 2110000,
            'berat' => 1,
            'review' => 'INFINITE COMMANDS
            Take hold of your game with the Razer Tartarus Pro—a gaming keypad that will never let victory escape your grasp. From its measured, nuanced inputs to its 32 programmable keys, experience a level of control and customization made for the most demanding of MMO gamers.
            RAZER ANALOG OPTICAL SWITCH
            While most gaming keypads and keyboards register a singular input when pressing a key, the Razer Tartarus Pro is fitted with Razer Analog Optical Switches which can register scaling levels of input in the same motion depending on how far you press. This allows for a more measured and nuanced form of control.
            For example, a half press will cause your character to walk, while a full press will get them to run. This type of control is similar to how you might move your character using analog thumbsticks on a controller.

            ADJUSTABLE ACTUATION
            Whether you prefer light taps or full, deliberate keystrokes that bottom out, tweak the gaming keypad’s actuation to be as hair-trigger sensitive or as solid and deliberate as you want.
            DUAL-FUNCTION KEYS
            As a direct benefit of having scaled inputs from Razer Analog Optical Switches, you can now bind two functions to each key—one that triggers on a partial keystroke, and another on a full keystroke.

            UNLIMITED MACRO LENGTH AND 8 QUICK-TOGGLE PROFILES
            Make your skill rotations and gameplay more efficient with the freedom to devise advanced macros, and prepare the perfect setup for any boss encounter with a collection of stored profiles—8 of which can be toggled on the fly using a button on the side of the gaming keypad',
            'rating' => 4,
            'fk_id_brand' => 20,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Razer Blackwidow Chroma V2',
            'stok'    => '10',
            'harga' => 2050000,
            'berat' => 3,
            'review' => 'Dari segi desain, BlackWidow V2 tampak lebih elegan sekaligus premium dari versi sebelumnya, meski perbedaannya tidak terlalu mencolok. Lima tombol macro di sebelah kiri masih ada, begitu juga dengan sistem backlighting yang bisa menyala dalam 16,8 juta warna dan menawarkan beragam efek.

            Estetika, fungsionalitas, Razer tentunya juga tidak lupa dengan aspek ergonomi. Setiap konsumen BlackWidow Chroma V2 akan mendapatkan sebuah palm rest magnetik yang dapat dilepas-pasang dengan mudah. Dari gambarnya saja, kelihatan kalau palm rest ini cukup empuk dan bisa membuat sesi gaming yang panjang tetap nyaman.',
            'rating' => 4,
            'fk_id_brand' => 20,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Rexus Battlefire K9D Gaming Keyboard',
            'stok'    => '10',
            'harga' => 199000,
            'berat' => 3,
            'review' => 'Rexus Gaming Keyboard Battlefire K9D merupakan keyboard gaming semi mekanik dengan 104 tombol bercahaya dari 3 warna LED, Hijau, Merah dan Biru, yang dapat kalian sesuaikan, serta fitur teknologi 19 tombol Anti Ghost, dengan tampilan alumunium alloy membuat keyboard gaming ini menjadi teman terbaik untuk kalian para gamers dan professional.

            GAMING KEYBOARD SEMI MECHANICAL
            Untuk para gamers yang mungkin tidak dapat memiliki keyboard gaming mechanical murni, Rexus menghadirkan Gaming Keyboard Battlefire K9D sebagai alternative keyboard gaming yang memiliki fitur-fitur unggulan dan inovatif yang selalu ditawarkan oleh Rexus untuk memenuhi kebutuhan para gamers.

            DOUBLE INJECTION KEYCAPS
            Rexus Gaming Keyboard Battlefire K9D menggunakan teknologi double injection keycaps yang memungkinkan huruf pada keyboard tidak memudar. Dengan begitu, keyboard gaming ini akan selalu keliatan keren, walaupun sudah lama dipakai.

            3 WARNA LED DAN ANTI GHOST
            Anda dapat memilih varian warna latar yang berbeda sebanyak 3 spektrum warna LED yang memukau sehingga menambah style Anda dalam menikmati beragam permainan. Gaming Keyboard LED ini juga memilki 104 tombol dengan 19 keys anti ghost yang tidak akan mengalami konflik saat tombol-tombol keyboard gaming ditekan secara bersamaan.',
            'rating' => 4,
            'fk_id_brand' => 21,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Rexus Daxa M71 Classic Mini Gaming Keyboard',
            'stok'    => '10',
            'harga' => 620000,
            'berat' => 3,
            'review' => 'Daxa M71 Classic adalah keyboard gaming mekanikal yang dimana menjadi sebuah instrumen penting yang menjadi bagian dalam gaya hidup gamer masa kini. Sentuhan desain moderen yang menekankan aspek elegansi, simpel, dan fungsional menjadi keunggulan dari keyboard mekanikal dengan 71 tombol ini.

            Play with Style!
            Ukuran yang ideal, desain penuh gaya, dan dukungan komponen berteknologi tinggi di dalamnya memungkinkan keyboard ini dibawa dan digunakan di manapun dalam berbagai aktivitas. Dapatkan keunggulan teknologi keyboard mekanikal dalam Keyboard Gaming Mekanikal Daxa M71 Classic. Representasikan gayamu dalam bermain!
            Dimensi dan desain yang simpel dan penuh gaya
            Dua varian warna: Elegant White & Black Beauty
            Teknologi Hot-swappable switch.
            Dilengkapi dengan fungsi Macro untuk mendukung permainan dan aktivitas mengetik yang lebih mudah dan lengkap
            Pilihan warna menarik dan moderen
            Kompatibel dengan semua platform sistem operasional

            50M Lifespan Outemu Switch
            Keyboard Gaming Mekanikal Daxa M71 Classic mempercayakan kualitas switch pada merek Outemu Classic yang terbukti kualitasnya dan bisa bersaing dengan merek-merek switch ternama lainnya. Durabilitas switch Outemu pada keyboard gaming Daxa M71 Classic masing-masing dapat bertahan hingga 50 juta klik. Tersedia tiga pilihan warna pilihan switch berdasarkan tipe dan karakteristiknya, yaitu Red switch, Brown switch, dan Blue switch.

            Hot-swappable Switch
            Teknologi hot swappable switch yang diaplikasikan pada keyboard Daxa M71 Classic memungkinkan pengguna untuk mengganti atau mengombinasikan switch-nya dengan switch tipe lain, bahkan dari merek switch lain. Teknologi ini tentu membuat Anda dapat menikmati sensasi berbagai tipe dan karakteristik switch dalam satu keyboard yang sama.

            Macro Features & Game Mode
            Keyboard Gaming Mekanikal Daxa M71 Classic didukung dengan fitur Macro yang memungkinkan pengaturan tombol secara personal. Keyboard ini juga dilengkapi dengan Mode Game yang dapat diaktifkan secara mudah, yaitu dengan menekan tombol Fn + Tab. Kedua fitur tersebut akan memudahkan Anda menyesuaikan keyboard ini sesuai dengan kebutuhan aktivitas Anda.

            Magnetic Keyboard Stand
            Keyboard DAXA M71 Classic juga dilengkapi dengan magnetic keyboard stand yang ergonomis untuk memberikan kenyamanan saat proses ketik-mengetik dan memberikan jangkauan pengetikan yang lebih jauh.

            Stylish Design in Two Colors
            Penampilan Keyboard Gaming Mekanikal Daxa M71 Classic merupakan pembeda dari keyboard gaming kebanyakan. Mengusung keyboard dengan ukuran yang praktis, keyboard gaming Daxa M71 Classic tampil dengan mengandalkan material high quality ABS yang terbukti tangguh dan tahan terhadap pengaruh cuaca. Terdapat dua varian warna, yaitu Elegant White dan Black Beauty, yang akan merepresentasikan kepribadian Anda.

            Programmable RGB LED
            Keyboard Gaming Mekanikal Daxa M71 Classic diperkaya dengan LED RGB pada tiap tombol dan sisi keyboard yang dapat diatur sesuai dengan keinginan. Untuk mengatur LED RGB pada tombol dan sisi keyboard, Anda tinggal menekan tombol Fn + Ins. Selain itu, tersedia beberapa tombol singkat untuk pengaturan cepat mode LED ini sehingga Anda tidak perlu masuk ke dalam fitur Macro-nya.',
            'rating' => 4,
            'fk_id_brand' => 21,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Rexus Daxa M71 Pro Mini Wireless Gaming Keyboard',
            'stok'    => '10',
            'harga' => 850000,
            'berat' => 3,
            'review' => 'Daxa M71 Pro merupakan tipe superior dari seri keyboard gaming mekanikal Daxa. Seperti kembarannya, aspek elegansi, simpel, dan fungsional menjadi keunggulan dari keyboard mekanikal dengan 71 tombol ini. Ukuran yang ideal, desain penuh gaya, dan dukungan komponen berteknologi tinggi di dalamnya membuat Keybaord Daxa M71 Pro pantas untuk digunakan untuk beragam aktivitas.

            Double Connection For The Pro
            Keunggulan teknologi keyboard mekanikal Daxa M71 Pro dibandingkan dengan tipe Classic adalah teknologi dual connection yang mengadopsi teknologi Bluetooth dan kabel sekaligus dalam satu perangkat. Baterai yang habis saat digunakan tidak akan lagi menjadi sebuah halangan untuk keyboard bluetooth ini, membuat M71 sangat praktis untuk digunakan dimana pun dan kapan pun.
            Teknologi Dual Connection.
            Teknologi Hot-swappable switch.
            Dilengkapi dengan fungsi Macro
            Kompatibel dengan semua platform sistem operasional.

            50M Lifespan Gateron Switch
            Daxa M71 Pro mempercayakan kualitas switch pada merek Gateron yang terbukti kualitasnya memiliki pengalaman ketik yang lebih lembut. Datang dengan tiga pilihan warna, yaitu Red switch, Brown switch, dan Blue switch dan memiliki durabilitas sebanyak 50 juta klik.

            Hot Swappable Switch
            Teknologi hot swappable switch yang diaplikasikan pada keyboard Daxa M71 memungkinkan pengguna untuk mengganti atau mengombinasikan switch-nya dengan switch tipe lain, bahkan dari merek switch lain. Teknologi ini tentu membuat Anda dapat menikmati sensasi berbagai tipe dan karakteristik switch dalam satu keyboard yang sama.

            Programmable RGB LED
            Keyboard Gaming Mekanikal Daxa M71 Pro diperkaya dengan LED RGB pada tiap tombol dan sisi keyboard yang dapat diatur sesuai dengan keinginan pengguna. Untuk mengatur LED RGB pada tombol dan sisi keyboard, Anda tinggal menekan tombol Fn + Ins. Selain itu, tersedia beberapa tombol singkat untuk pengaturan cepat mode LED ini sehingga Anda tidak perlu masuk ke dalam fitur Macro-nya.

            Macro Features With Game Mode
            Daxa M71 Pro didukung dengan fitur Macro yang memungkinkan pengaturan tombol secara personal. Keyboard ini juga dilengkapi dengan Mode Game yang dapat diaktifkan secara mudah, yaitu dengan menekan tombol Fn + Tab.

            Dual Mode Connection
            Sistem dua koneksi kabel dan nirkabel dengan mempercayakan pada teknologi Bluetooth dan kabel USB 3.0 sekaligus dalam satu perangkat membuat Keyboard Gaming Mekanikal Daxa M71 Pro ini dapat dikoneksikan dengan beragam perangkat atau device secara mudah dan praktis. Menggunakan Bluetooth 5.0 yang terbukti hemat energy, dengan kecepatan transfer data maksimal di kisaran 2Mbps, maka Anda mengetik tanpa adanya latensi atau lag.

            Long-life Battery
            Daxa M71 Pro terintegrasi dengan baterai tanam berkekuatan 1000mAh. yang dalam sekali pengisian, dioperasikan selama 10 jam dan 35 jam dalam kondisi siaga.

            Auto Sleep Mode
            Keyboard Gaming Mekanikal Daxa M71 Pro dilengkapi dengan fitur auto sleep yang akan menghemat penggunaan baterai saat keyboard berada dalam mode koneksi Bluetooth. Jika tidak digunakan selama satu menit, maka lampu latar keyboard akan padam secara otomatis dan akan menyala secara otomatis dengan menekan salah satu tombol keyboard.

            Two-Tone Keycap
            Penampilan Keyboard Gaming Mekanikal Daxa M71 Pro makin gaya dengan kombinasi dua warna keycaps, yaitu putih dan oranye. Kombinasi yang sering diistilahkan “two tone keycaps” ini berfungsi untuk menambah kesan moderen pada layout keyboard secara keseluruhan.

            agnetic Keyboard Stand
            Keyboard ini juga dilengkapi dengan magnetic keyboard stand yang ergonomis untuk memberikan kenyamanan saat proses ketik-mengetik dan memberikan jangkauan pengetikan yang lebih jauh.',
            'rating' => 4,
            'fk_id_brand' => 21,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Rexus Daxa M84 Pro Wireless Gaming Keyboard',
            'stok'    => '10',
            'harga' => 950000,
            'berat' => 3,
            'review' => 'Daxa M84 merupakan tipe superior dari seri keyboard gaming mekanikal Daxa dengan dua mode konektivitas sekaligus yang berteknologikan Bluetooth 5.0 dan USB 3.0 untuk model kabel. Seperti kembarannya, aspek elegansi, simpel, dan fungsional menjadi keunggulan dari keyboard mekanikal dengan 84 tombol ini. Ukuran yang ideal, desain penuh gaya, dan dukungan komponen berteknologi tinggi di dalamnya membuat Keybaord Daxa M84 pantas digunakan untuk beragam aktivitas.

            Next-Level Dimension
            Keyboard Gaming Mekanikal Daxa M84 Pro tampil dengan ukuran atau layout untuk sebuah keyboard mini yang multifungsi. Menderetkan 84 tombol, keyboard yang mengadopsi dua model konektivitas, kabel dan nirkabel, ini tampil desain elegan yang moderen.

            Beragam keunggulan, baik dari segi tampilan, multi-konektivitas, maupun fungsi keseluruhan menjadi daya tarik tersendiri dari keyboard premium ini. Anda dapat memeroleh pengalaman berbeda saat bermain atapun bekerja dengan menggunakan keyboard ini.
            -Teknologi Hot-swappable switch
            -Dilengkapi teknologi konektivitas ganda, kabel dan nirkabel
            -Kapasitas baterai besar
            -Dilengkapi dengan fungsi Macro dengan onboard memory
            -Pilihan dua warna menarik, dengan dua corak keycaps (White Grey & Black Grey)
            -Kompatibel dengan platform sistem operasional PC maupun Android

            84 Multi-functional Keys
            Keyboard Daxa M84 Pro dilengkapi dengan 84 tombol yang multi-fungsi. Dengan beberapa tombol kombinasi, Anda dapat mengaktifkan fungsi keyboard.

            Latest Tech Dual Connection
            Keyboard Daxa M84 Pro dilengkapi dengan dua mode konektivitas sekaligus yang berteknologikan Bluetooth 5.0 dan USB 3.0 untuk model kabel. Sistem konektivitas ganda tersebut akan memudahkan Anda untuk mengoneksikan keyboard ini dengan beragam perangkat lain.

            Additional USB Hub
            Keyboard Gaming Mekanikal M84 Pro mempunyai tambahan USB HUB 2.0 dan berfungsi sebagai konektor sehingga perangkat lain dapat dikoneksikan melalui keyboard ini. Praktis dan fungsional!

            50M Lifespan Gateron Switch
            Keyboard Daxa M84 Pro menggunakan switch Gateron dengan durabilitas hingga 50 juta klik untuk tiap switch. Tersedia tiga pilihan warna pilihan switch berdasarkan tipe dan karakteristiknya, yaitu Red switch, Brown switch, Blue switch, dan Yellow switch.

            Hot-swappable Switch
            Teknologi hot swappable switch yang diaplikasikan pada keyboard Daxa M84 Pro memungkinkan pengguna untuk mengganti atau mengombinasikan switch-nya dengan switch tipe lain, bahkan dari merek switch lain.

            Two Tone Keycaps
            Penampilan Keyboard Gaming Mekanikal Daxa M84 Pro makin gaya dengan kombinasi dua warna keycaps, yaitu putih abu-abu dan hitam abu-abu. Kombinasi yang sering diistilahkan “two tone keycaps” ini berfungsi untuk menambah kesan moderen pada layout keyboard secara keseluruhan

            Flawless RGB LED
            Keyboard Gaming Mekanikal Daxa M84 Pro dilengkapi dengan LED RGB yang dapat diatur sesuai dengan keinginan pengguna. Pengaturan LED RGB tersebut dapat dilakukan dengan pengaturan cepat maupun dengan menggunakan perangkat lunak.

            Bigger Battery Capacity
            Keyboard Daxa M84 Pro ditenagai oleh baterai berkapasitas besar, yaitu 3750 mAh. Baterai dengan kapasitas sebesar itu menjamin durabilitas penggunaan keyboard yang lebih lama saat dipakai dalam mode nirkabel.',
            'rating' => 4,
            'fk_id_brand' => 21,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Rexus KM8 Combo Wireless Keyboard Mouse',
            'stok'    => '10',
            'harga' => 180000,
            'berat' => 3,
            'review' => 'New Level of Multimedia Wireless Combo Gear
            Rexus Wireles Combo Keyboard Mouse KM8 adalah kombinasi mouse wireless dan keyboard wireless untuk kebutuhan multimedia, kantor, dan profesional. Rexus KM8 tampil dengan desain dan corak yang modern, elegan, ergonomis, dan dilengkapi komponen yang lebih berkualitas. Komponen tersebut meliputi chipset sensor yang sensitif dan akurat dari PIXART, material tombol yang dengan durabilitas hingga 10 juta klik, dan material keseluruhan yang terbuat dari plastik ABS berkualitas.

            Ukuran dan Desain Ideal
            Keyboard Wireless Rexus KM8 dilengkapi 106 tombol yang didesain secara ergonomis dengan bentuk keycaps yang cekung sesuai bentuk ujung jari sehingga sangat nyaman digunakan saat mengetik dan mempunyai daya tahan hingga 10 juta klik

            Sensor yang Akurat
            Dengan chipset sensor PIXART PAW3065, sensitivitas mouse wireless dalam memetakan permukaan akan lebih akurat, baik untuk pergerakan pelan maupun akseleratif.

            Sinyal Nirkabel yang Stabil
            Rexus KM8 menggunakan sinyal nirkabel dengan memanfaatkan frekuensi 2,4 GHz. Lalu lintas sinyal antara receiver dengan mouse wireless ataupun keyboard wireless dapat dilakukan dalam jangkauan 10 meter persegi.',
            'rating' => 4,
            'fk_id_brand' => 21,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Steelseries Apex 3 Gaming Keyboard',
            'stok'    => '10',
            'harga' => 1110000,
            'berat' => 2,
            'review' => 'Outshine the Competition
            The water resistant Apex 3 is a full-fledged gaming keyboard created by combining SteelSeries’ cutting-edge technology with a collection of gaming-focused features.

            Rated water and dust resistant
            Accidents happen, and Apex 3 can survive them.

            10-Zone RGB Illumination
            Choose from brilliant rainbow RGB effects, your favorite color schemes, or even to react when you’re under attack. Personalize the illumination to match any style.

            Whisper Quiet Gaming Switches
            Low friction switches for near silent use and unmatched durability, with performance guaranteed for over 20 million keypresses.

            Premium Magnetic Wrist Rest
            The perfect keyboard accessory, with a simple magnetic solution for easy and secure attachment, full palm support, and durable soft touch finish, so you’re comfortable typing and gaming for as long as you want.

            Dedicated Multimedia Controls
            A clickable metal roller and media keys allow you to adjust volume and settings on the fly: rewind, skip, pause and more, all at the touch of a button.

            Three-Way Cable Routing
            Prevent your cable from stretching, pulling, and getting in the way. The frame has built-in channels that allow you to choose from one of three possible places for your cable to exit, keeping your desk tidy.

            Glow Up
            Best-in-class affordable products with SteelSeries’ cutting-edge innovation and premium performance.',
            'rating' => 4,
            'fk_id_brand' => 24,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Steelseries Apex 5 Gaming Keyboard',
            'stok'    => '10',
            'harga' => 1840000,
            'berat' => 2,
            'review' => 'Best of Both Worlds
            The Apex 5 combines the smoothness of a membrane switch with the added durability, performance, and satisfying tactile click of a blue mechanical switch, for a premium gaming experience where you don’t have to choose one over the other.

            OLED Smart Display
            Customize the OLED screen with your favorite gifs, view on-the-fly game info, incoming Discord messages, settings, and more.

            Aircraft Grade Aluminum Alloy
            The Series 5000 metal frame is manufactured for a lifetime of unbreakable durability and sturdiness, making it the perfect centerpiece of any high-end setup.
            Premium Magnetic Wrist Rest
            The perfect keyboard accessory, with a simple magnetic solution for easy and secure attachment, full palm support, and durable soft touch finish, so you’re comfortable typing and gaming for as long as you want.

            Dedicated Multimedia Controls
            A clickable metal roller and media keys allow you to adjust volume and settings on the fly: change brightness, rewind, skip, pause and more, all at the touch of a button.

            Three-Way Cable Routing
            Prevent your cable from stretching, pulling, and getting in the way. The frame has built-in channels that allow you to choose from one of three possible places for your cable to exit, keeping your desk tidy.

            Glow Up
            Best-in-class affordable products with SteelSeries’ cutting-edge innovation and premium performance.

            Dynamic Per-Key RGB Illumination
            Millions of color options and reactive typing effects make you the designer of your ultimate setup. Sync up with your other SteelSeries gear for the most gorgeous setup ever.',
            'rating' => 4,
            'fk_id_brand' => 24,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Steelseries Apex 7 Gaming Keyboard',
            'stok'    => '10',
            'harga' => 2630000,
            'berat' => 2,
            'review' => 'OLED Smart Display
            An integrated command center displays useful information for adjusting settings, changing profiles, and seeing on-the-fly updates. Avoid tabbing out of what you’re doing, and instead let your keyboard show you the important details.

            Durable Mechanical Gaming Switches
            Guaranteed for 50 million keypresses using whichever ultra-fast switch type you prefer: red, blue, or brown.

            Aircraft Grade Aluminum Alloy
            The Series 5000 metal frame is manufactured for a lifetime of unbreakable durability and sturdiness, making it the perfect centerpiece of any high end setup.

            Premium Magnetic Wrist Rest
            The perfect keyboard accessory, with a simple magnetic solution for easy and secure attachment, full palm support, and durable soft touch finish, so you’re comfortable typing and gaming for as long as you want.

            Dedicated Multimedia Controls
            A clickable metal roller and the media key allows you to adjust volume and settings on the fly: change brightness, rewind, skip, pause and more, all at the touch of a button.

            USB Passthrough Port
            No more crawling behind your PC to plug in USB devices. Instead, insert a flash drive, wireless mouse/headset transmitter, phone, or any USB device directly into the keyboard.

            Three-Way Cable Routing
            Prevent your cable from stretching, pulling, and getting in the way. The frame has built-in channels that allow you to choose from one of three possible places for your cable to exit, keeping your desk tidy.

            Dynamic Per-Key RGB Illumination
            Millions of color options and reactive typing effects make you the designer of your ultimate setup. Sync up with your other SteelSeries gear for the most gorgeous setup ever.

            Customize Everything
            SteelSeries Engine unlocks a library of features for all SteelSeries products, so you can customize, sync, and tweak your setup to perfection.',
            'rating' => 4,
            'fk_id_brand' => 24,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Steelseries Apex 7 TKL Gaming Keyboard',
            'stok'    => '10',
            'harga' => 2190000,
            'berat' => 2,
            'review' => 'OLED Smart Display
            An integrated command center displays useful information for adjusting settings, changing profiles, and seeing on-the-fly updates. Avoid tabbing out of what you’re doing, and instead let your keyboard show you the important details.

            Durable Mechanical Gaming Switches
            Guaranteed for 50 million keypresses using whichever ultra-fast switch type you prefer: red, blue, or brown.

            Aircraft Grade Aluminum Alloy
            The Series 5000 metal frame is manufactured for a lifetime of unbreakable durability and sturdiness, making it the perfect centerpiece of any high end setup.

            Premium Magnetic Wrist Rest
            The perfect keyboard accessory, with a simple magnetic solution for easy and secure attachment, full palm support, and durable soft touch finish, so you’re comfortable typing and gaming for as long as you want.

            Dedicated Multimedia Controls
            A clickable metal roller and the media key allows you to adjust volume and settings on the fly: change brightness, rewind, skip, pause and more, all at the touch of a button.

            USB Passthrough Port
            No more crawling behind your PC to plug in USB devices. Instead, insert a flash drive, wireless mouse/headset transmitter, phone, or any USB device directly into the keyboard.

            Three-Way Cable Routing
            Prevent your cable from stretching, pulling, and getting in the way. The frame has built-in channels that allow you to choose from one of three possible places for your cable to exit, keeping your desk tidy.

            Dynamic Per-Key RGB Illumination
            Millions of color options and reactive typing effects make you the designer of your ultimate setup. Sync up with your other SteelSeries gear for the most gorgeous setup ever.

            Customize Everything
            SteelSeries Engine unlocks a library of features for all SteelSeries products, so you can customize, sync, and tweak your setup to perfection.',
            'rating' => 4,
            'fk_id_brand' => 24,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Steelseries Apex M750 Gaming Keyboard',
            'stok'    => '10',
            'harga' => 2040000,
            'berat' => 2,
            'review' => 'QX2 Mechanical Switches
            Featuring the third generation of SteelSeries mechanical switches, the QX2 delivers dramatically faster gameplay with low force and a linear actuation point. 50 million key presses guaranteed.

            Durable Aerospace Aluminum Frame
            Forged with 5000 Series aluminum metal-alloy, the Apex M750’s frame is stunningly simplistic, yet extremely durable. With a beautiful black matte finish, it’s a true showpiece for the center of your gaming setup.

            Rev Up the Engine
            SteelSeries Engine Software unlocks an impressive arsenal of Engine Apps that make customization easy and intuitive. Unleash the full power of dynamic per key RGB backlighting to create the most complicated lighting effects in seconds.

            Discord Chat Integration
            Light up your keyboard with customizable Discord Chat notifications that indicate new messages, mute status and more.

            No PhD Required
            Upload any animated GIF and ImageSync converts it into a customizable lighting effect. Multi-color lighting configuration has never been so easy.

            In-Game Notifications
            Immerse yourself with exclusive SteelSeries GameSense reactive illumination, responding to in-game events like low ammo, health, kills, money and cooldown timers.

            PrismSync Lighting
            Sync dynamic multi-color lighting effects between all your SteelSeries Prism-enabled gear. Show off with one-click lighting effects or complex light shows.

            Programmable Keys & Macros
            SteelSeries Engine Software features the most expansive set of personalization options available. Text based, key-press, and on-the-fly macros can all be easily programmed.

            Full Anti-Ghosting
            Apex M750 is armed with 100% anti-ghosting and full N-Key Rollover ensuring you never lose a match because of an unrecognized key press.',
            'rating' => 4,
            'fk_id_brand' => 24,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Tecware Phantom Elite P87 Gateron TKL Gaming Keyboard',
            'stok'    => '10',
            'harga' => 875000,
            'berat' => 2,
            'review' => 'The Tecware Phantom Elite TKL RGB Mechanical Gaming Keyboard with Gateron switches, Hotswap various mechanical switches and still get the proven quality of the Phantom. With 5 different variants of the Gateron switches available, Gateron Blue – Green – Brown – Red – Yellow or Black Switch you’re bound to find your perfect switch.

            Constructed on an alloy backplate with a gunmetal finish, preserving the toughness of the Phantom Keyboard people love.
            The Tecware Phantom Elite TKL gaming keyboard comes with 87 keys, RGB LEDs with 18 lighting effects, programmable keys, Doubleshot ABS moulded keycaps and a 1.8m braided USB cable.',
            'rating' => 4,
            'fk_id_brand' => 25,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Tecware Phantom Elite P87 Kailh TKL Gaming Keyboard',
            'stok'    => '10',
            'harga' => 875000,
            'berat' => 2,
            'review' => 'The Tecware Phantom Elite TKL RGB Mechanical Gaming Keyboard with Kailh Speed switches, Hotswap various mechanical switches and still get the proven quality of the Phantom. With 3 different variants of the Kailh Speed switches available, Speed Bronze – Speed Copper and Speed Silver with shortened travel and actuation distances, Kailh Speed Switches give you that slight advantage in reaction time.

            Constructed on an alloy backplate with a gunmetal finish, preserving the toughness of the Phantom Keyboard people love.
            The Tecware Phantom Elite TKL gaming keyboard comes with 87 keys, RGB LEDs with 18 lighting effects, programmable keys, Doubleshot ABS moulded keycaps and a 1.8m braided USB cable.',
            'rating' => 4,
            'fk_id_brand' => 25,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Tecware Phantom P104 RGB Gaming Keyboard',
            'stok'    => '10',
            'harga' => 620000,
            'berat' => 2,
            'review' => 'The Tecware Phantom RGB Mechanical Gaming Keyboard with Outemu switches is engineered to enable gamers to play more effectively when playing FPS games. The Tecware Phantom gaming keyboard comes with 104 keys, RGB LEDs with 18 lighting effects, programmable keys, Doubleshot ABS moulded keycaps and a 1.8m braided USB cable.

            High-performance switches
            Each Oetemu key switch comes with a 50-million keystroke lifespan. The key switches have a modular design, allowing easy replacement. It utilises an FR-4 fibreglass PCB along with a high-quality plastic frame and a sturdy alloy backplate, giving it the durability that allows it to withstand intense gaming sessions.

            Programmable functionality
            Play like a pro, executing commands and navigating quickly. The Tecware Phantom RGB mechanical keyboard lets you record macros and assign shortcuts for up to three user profiles.',
            'rating' => 4,
            'fk_id_brand' => 25,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Tecware Phantom L Gaming Keyboard',
            'stok'    => '10',
            'harga' => 595000,
            'berat' => 2,
            'review' => 'Reduced Height, Same Contoured Keys
            Retain full control and a comfortable typing experience.

            Lower Travel, Faster Response
            Low profile switches with shorter travel and actuation distances for increased speed and responsiveness in game.

            16.8M Color Lighting
            18 Pre-set Lighting Modes
            Toggle between 18 pre-set lighting modes on-the-fly.
            Per-key RGB Lighting Customization
            Pick a different color for each key and create your own color combinations.

            Outemu Mechanical Switches
            Spectre Pro comes pre-installed with Outemu mechanical switches, reliable for 50 million keystrokes.
            Available in 3 different variants. Outemo Blue, Brown, and Red swicthes.

            Minimal Downtime
            Spectre Pro’s hot-swappable sockets allow you to replace the mechanical switches on your own, minimizing downtime.

            Lightweight & Portable
            Weighing at just 589g, its slim compact build, detachable USB-C cable, and plug-and-play design allows for easy portability.',
            'rating' => 4,
            'fk_id_brand' => 25,
            'fk_id_kategori' =>7
        ]);
        BarangModel::insert([
            'namaBarang' => 'Tecware Phantom 96 Gaming Keyboard',
            'stok'    => '10',
            'harga' => 650000,
            'berat' => 2,
            'review' => '16.8M Color Lighting
            18 Pre-set Lighting Modes
            Toggle between 18 pre-set lighting modes on-the-fly.
            Per-key RGB Lighting Customization
            Pick a different color for each key and create your own color combinations.

            Hybrid 90% Layout
            Always wanted a shorter, more compact keyboard but couldn’t live without the Numpad? Phantom 96 is the keyboard for you.
            Switch to TKL Mode when gaming or Numpad Mode when working.

            TKL Mode
            Activates Arrow Keys and disables the surrounding keys on the numpad.
            Numpad Mode
            Activates Full Numpad, like a Full-sized keyboard.

            Outemu Mechanical Switches
            Spectre Pro comes pre-installed with Outemu mechanical switches, reliable for 50 million keystrokes.
            Available in 3 different variants. Outemo Blue, Brown, and Red swicthes.

            Minimal Downtime
            Spectre Pro’s hot-swappable sockets allow you to replace the mechanical switches on your own, minimizing downtime.

            No Cable Fuss
            Connects via a detachable USB-C cable, unplug your keyboard with ease.
            Includes cable routes at the base that ensures no unnecessary long dangling cables.',
            'rating' => 4,
            'fk_id_brand' => 25,
            'fk_id_kategori' =>7
        ]);
    }
}
