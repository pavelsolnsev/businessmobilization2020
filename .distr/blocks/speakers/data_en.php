<?php
{# Английская версия #}
{% set data = [
	{id: 'norris', logo: '', date: '12.09'},
	{id: 'kozyk', logo: '', date: '15.08'},
	{id: 'shaukat', logo: '', date: '15.08'},
	{id: 'piontek', logo: '', date: '15.08'},
	{id: 'brown', logo: '', date: '15.08'},
	{id: 'harari', logo: '', date: '29.05'},
	{id: 'besson', logo: '', date: ''},
	{id: 'taleb', logo: ''},
	{id: 'vujicic', logo: '', date: '20.06'},
	{id: 'belfort', logo: 'belfort'},
	{id: 'adizes', logo: '', photo_big: true },
	{id: 'kitting', logo: '', date: '18.07'},
	{id: 'rulli', logo: '', date: '18.07'},
	{id: 'aguirre', logo: '', date: '18.07'},
	{id: 'fuente', logo: '', date: '18.07'},
	{id: 'damborg', logo: '', date: '04.07'},
	{id: 'gilbert', logo: '', date: '27.06'},
	{id: 'dash', logo: '', date: '20.06'},
	{id: 'akhmedov', logo: '', date: '20.06'},
	{id: 'raimen', logo: '', date: '20.06'},
	{id: 'elkharbotly', logo: '', date: '20.06'},
	{id: 'horikiri', logo: ''},
	{id: 'rose', logo: '', date: '29.05'},
	{id: 'nordstrem', logo: '', photo_big: true },
	{id: 'vries', logo: ''},
	{id: 'saad', logo: '', date: '29.05'},
	{id: 'volek', logo: 'volek', date: '29.05'},
	{id: 'tschohl', logo: 'sqi'},
	{id: 'assad', logo: '', date: '29.05'},
	{id: 'neicovcean', logo: '', date: '29.05'},
	{id: 'singh', logo: '', date: '29.05'},
	{id: 'sanei', logo: '', date: '29.05'},
	{id: 'kabi', logo: '', date: '29.05'},
	{id: 'khan', logo: '', date: '29.05'},
	{id: 'ash', logo: 'epic-sky', date: '13.06'},
	{id: 'huffman', logo: 'huffman', date: '13.06'},
	{id: 'akilhanov', logo: '', date: ''},
	{id: 'lundberg', logo: '', date: '29.05'},
	{id: 'kaabi', logo: '', date: '29.05'},
	{id: 'mahmoudi', logo: ''},
	{id: 'dover', logo: ''},
	{id: 'kamran', logo: ''},
	{_id: 'vitoratos', logo: ''}

]%}


?>
<?php /*
	{# Резерв reserv #}
	{id: 'hof', logo: '', date: '11.07'},
	{id: 'charm', logo: '', date: '18.07'},
	{id: 'uelch', logo: ''},
	{id: 'pustovit', logo: 'synergy-accelerator'},
	{id: 'muravkina', logo: 'galchonok', date: ''},
	{id: 'glariantov', logo: '', date: ''},
	{id: 'polousov', logo: 'trade', date: ''},
	{id: 'gits', logo: '', date: ''},
	{id: 'azizian', logo: '', date: ''},
	{id: 'mamaev', logo: 'kidburg'},
	{id: 'marynovich', logo: ''},
	{id: 'sivozhelezov', logo: ''},
	{id: 'matary', logo: 'inp'},
	{id: 'rublev', logo: ''},
	{id: 'kirusichev', logo: 'wazzup'},
	{id: 'sergeeva', logo: ''},
	{id: 'lesin', logo: ''},
	{id: 'de-siro', logo: 'ilpatio'},
	{id: 'vulfova', logo: ''},
	{id: 'shark', logo: ''},
	{id: 'kazakov', logo: ''},
	{id: 'mokrov', logo: ''},
	{id: 'karpov', logo: ''},
	{id: 'mir', logo: '', date: ''},
	{id: 'hartman', logo: 'kupivip', date: ''},
	{id: 'bogdanov', logo: ''},
	{id: 'haybaev', logo: ''},
	{id: 'gabani', logo: ''},
	{id: 'maslov', logo: ''},
	{id: 'mihailov', logo: ''},
	{id: 'gavrikov', logo: ''},
	{id: 'peysakhzon', logo: 'my_target'},
	{id: 'chernov', logo: ''},
	{id: 'soldatkin', logo: ''},
	{id: 'melnik', logo: ''},
	{id: 'levchenko', logo: ''},
	{id: 'beselidze', logo: ''},
	{id: 'chekhranov', logo: ''},
	{id: 'cheryomnikh', logo: ''},
	{id: 'kuzin', logo: ''},
	{id: 'novopashina', logo: ''},
	{id: 'turman', logo: ''},
	{id: 'bereza', logo: ''},
	{id: 'lipaj', logo: ''},
	{id: 'raymm', logo: ''},
	{id: 'aistov', logo: 'tokyo'},
	{id: 'shapkin', logo: ''},
	{id: 'grishenko', logo: ''},
	{id: 'yudovich', logo: ''},
	{id: 'gorsky', logo: ''},
	{id: 'alzubaidi', logo: ''},
	{id: 'moroz', logo: '', date: ''},
	{id: 'bortnikov', logo: '', date: ''},
	{id: 'pushkareva', logo: '', date: ''},
	{id: 'sudakova', logo: '', date: ''},
	{id: 'melnikov', logo: '', date: ''},
	{id: 'troska', logo: '', date: ''},
	{id: 'mishicheva', logo: '', date: ''},
	{id: 'spichakov', logo: '', date: ''},
	{id: 'faisal', logo: 'emc', date: ''},
	{id: 'filippone', logo: 'culinaryion', date: ''},
	{id: 'gerchik', logo: '', date: ''},
	{id: 'freitas', logo: '', date: ''},
	{id: 'zyryanova', logo: 'self-mama', date: ''},
	{id: 'esipova', logo: '', date: ''},
	{id: 'saburov', logo: 'tay-spa'},
	{id: 'gurinovich', logo: 'logo-gurinovich'},
	{id: 'mustafayeva', logo: 'mustafayeva'},
	{id: 'philippone', logo: 'culinaryion', date: ''},
	{id: 'shobanov', logo: ''},
	{id: 'kovpak', logo: ''},
	{id: 'semenikhin', logo: ''},
	{id: 'efremov', logo: ''},
	{id: 'babich', logo: 'rbk'},
	{id: 'makshanov', logo: 'arb'},
	{id: 'shavelev', logo: ''},
	{id: 'kuzovov', logo: ''},
	{id: 'koposov', logo: ''},
	{id: 'strelkova', logo: ''},
	{id: 'golikov', logo: ''},
	{id: 'sysueva', logo: ''},
	{id: 'berek', logo: ''},
	{id: 'gralnik', logo: ''},
	{id: 'lokontsev', logo: ''},
	{id: 'gerasimov', logo: ''},
	{id: 'timohina', logo: ''},
	{id: 'grohovskyi', logo: ''},
	{id: 'shahova', logo: 'mshahova'},
	{id: 'kasheev', logo: 'sendsay'},
	{id: 'nosova', logo: 'atol'},
	{id: 'shatyrko', logo: ''},
	{id: 'kazantcev', logo: ''},
	{id: 'bobrova', logo: ''},
	{id: 'indina', logo: ''},
	{id: 'pavlikova', logo: ''},
	{id: 'kunitskiy', logo: 'bc'},
	{id: 'orlova', logo: ''},
	{id: 'alibaeva', logo: ''},
	{id: 'kovpakeka', logo: ''},
	{id: 'goncharova', logo: ''},
	{id: 'ukolova', logo: ''},
	{id: 'jakuba', logo: ''},
	{id: 'koryanova', logo: 'investo'},
	{id: 'rizvanova', logo: ''},
	{id: 'mikhailichenko', logo: ''},
	{id: 'zelenaya', logo: ''},
	{id: 'dereev', logo: ''},
	{id: 'kucherena', logo: ''},
	{id: 'kuznetsov', logo: 'vse-instrumenty'},
	{id: 'komarova', logo: ''},
	{id: 'gadzhieva', logo: ''},
	{id: 'matita', logo: ''},
	{id: 'alakidze', logo: ''},
	{id: 'milasya', logo: ''},
	{id: 'tagiev', logo: ''},
	{id: 'belonoshenko-e', logo: ''},
	{id: 'igonin', logo: ''},
	{id: 'shpak', logo: ''},
	{id: 'gandapas', logo: 'gandapas'},
	{id: 'batirev', logo: ''},
	{id: 'nikolaeva', logo: ''},
	{id: 'daynekin', logo: 'synergy-book', date: '30/04'},
	{id: 'nesterenko', logo: ''},
	{id: 'ignatieva', logo: ''},
	{id: 'alekseev', logo: ''},
	{id: 'tsatskin', logo: ''},
	{id: 'pavlov', logo: ''},
	{id: 'melnikov', logo: ''},
	{id: 'vetoshkina', logo: ''},
	{id: 'fayziev', logo: ''},
	{id: 'chekalina', logo: ''},
	{id: 'alkhanov', logo: ''},
	{id: 'hashmi', logo: '', date: ''},

*/ ?>
