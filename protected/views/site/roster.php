<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Ростер';
$this->breadcrumbs=array(
	'Ростер',
);
?>

<h1>Состав гильдии</h1>

<table class="table table-striped">
	<tr>
		<td>Имя</td>
		<td>Раса</td>
		<td>Класс</td>
		<td>Пол</td>
		<td>Уровень</td>
		<td>Очков достижений</td>
		<td>Специализация</td>
		<td>Роль</td>
		<td>Ранг в гильдии</td>
	</tr>
	<?php 
		foreach ($gi as $gm) {
			?>
			<tr>
				<?php
					$class = 0;
					switch ($gm['class']) {
					    case 1:
					        $class = 'warrior';
					        break;
					    case 2:
					        $class = 'paladin';
					        break;
					    case 3:
					        $class = 'hunter';
					        break;
					    case 4:
					        $class = 'rogue';
					        break;
					    case 5:
					        $class = 'priest';
					        break;
					    case 6:
					        $class = 'dk';
					        break;
					    case 7:
					        $class = 'shaman';
					        break;
					    case 8:
					        $class = 'mage';
					        break;
					    case 9:
					        $class = 'warlock';
					        break;
						case 10:
					        $class = 'monk';
					        break;
					    case 11:
					        $class = 'druid';
					        break;
					}


					print '<td><b>
						<a class="'.$class.'" href="http://eu.battle.net/wow/ru/character/ревущии-фьорд/'.$gm['name'].'/simple">'.$gm['name'].'</a>
						</b></td>';
					print '<td>'.$gm['race'].'</td>';
					print '<td><img src="'.Yii::app()->request->baseUrl.'/images/class_'.$gm['class'].'.jpg" /></td>';
					print '<td>'.$gm['gender'].'</td>';
					print '<td>'.$gm['level'].'</td>';
					print '<td>'.$gm['achievementPoints'].' <img src="'.Yii::app()->request->baseUrl.'/images/achievements.gif"></td>';
					print '<td>'.$gm['specName'].'</td>';
					print '<td>'.$gm['specRole'].'</td>';
					print '<td>'.$gm['rank'].'</td>';
				?>
			</tr>
			<?php
		}
	?>
</table>