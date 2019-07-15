@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-around">
	<a href=""><div class="p-2 bg-primary text-white">Gestion des marques</div></a>
	<a href=""><div class="p-2 bg-primary text-white">Gestion des vehicules</div></a>
	<a href=""><div class="p-2 bg-primary text-white">Gestion des résérvations</div></a>
</div>
<div class="container d-flex justify-content-around">
	<div class="gestion_brands">
		<fieldset class="ajout_marque">
		<legend>Gestion des marques</legend>
			<form action="{{route('addBrand')}}" method="POST">
			<table>
			@csrf
				<tr>
					<td><label>Ajouter une marque : </label>
					<td><input type="text" name="brand"></td>
				</tr>
				<tr>
					<td><button type="submit"> Ajouter </button></td>
				</tr>
			</form>
			</table>
			<hr>
			<form action="{{route('deleteBrand')}}" method="POST">
			<table>
				<tr>
					@csrf
					<td><label>Supprimer une marque : </label></td>
					<td>
						<select name="brand_id">
							@foreach ($brands as $brand)
							<option value="{{$brand->id}}">{{$brand->name}}</option>
							@endforeach
						</select>
					</td>
				</tr>
				<tr>
					<td><button type="submit">Supprimer</button></td>
				</tr>	
			</form>
			</table>
		</fieldset>
	</div>
	<div class="gestion_vehic">
		<fieldset class="ajout_vehic">
			<legend>Gestion des véhicules</legend>
			<form action="{{route('addCar')}}" method="POST" enctype="multipart/form-data">
				@csrf
				<table><legend>Ajouter un véhicule</legend>
					<tr>
						<td><label>Marque : </label></td>
						<td><select name="brand_id">
						@foreach ($brands as $brand)
						<option value="{{$brand->id}}">{{$brand->name}}</option>
						@endforeach
						</select></td>
					</tr>
					<tr>
						<td><label>Modele : </label></td>
						<td><input type="text" name="name"></td>
					</tr>
					<tr>
						<td><label>Couleur:</label></td>
						<td><input type="text" name="color"></td>
					</tr>
					<tr>
						<td><label>Matricule:</label></td>
						<td><input type="text" name="matricule"></td>
					</tr>
					<tr>
						<td><label>Carburant:</label></td>
						<td><input type="text" name="fuel"></td>
					</tr>
					<tr>
						<td><label>Nombre de places :</label></td>
						<td><input type="number" name="places"></td>
					</tr>
					<tr>
						<td><label>Kilomètrage :</label></td>
						<td><input type="number" name="kilometrage"></td>
					</tr>
					<tr>
						<td><label>Puissance :</label></td>
						<td><input type="text" name="power"></td>
					</tr>
					<tr>
						<td><label>Prix :</label></td>
						<td><input type="number" name="price"></td>
					</tr>
					<tr>
						<td><label>Statut :</label></td>
						<td><input type="number" name="statut"></td>
					</tr>
					<tr>
						<td><label>Commentaires :</label></td>
						<td><input type="text" name="comments"></td>
					</tr>
					<tr>
						<td><label>Ajouter des images : </label></td>
						<td><input type="file" name="photo[]" multiple/></td>
					</tr>
					<tr>
						<td colspan="2"><button type="submit"> Ajouter </button></td>
					</tr>
				</table>
			</form>

			<form action="{{route('editCar')}}" method="POST">
				@csrf
				<table><legend>Editer les données d'un véhicule</legend>
					<tr>
						<td><label>Marque : </label></td>
						<td>
							<select name="brand_id" id="run_search_modify">
								@foreach ($brands as $brand)
								<option value="{{$brand->id}}">{{$brand->name}}</option>
								@endforeach
							</select>
						</td>
					</tr>
					<td><label>Modele et matricule : </label></td>
						<td><select name="car_id" id="cars_list">
							@foreach ($cars as $car)
							<option value="{{$car->id}}">{{$car->name}} - {{$car->matricule}}</option>
							@endforeach
						</select></td>
					<tr>
						<td><label>Couleur:</label></td>
						<td><input type="text" name="color"></td>
					</tr>
					<tr>
						<td><label>Carburant:</label></td>
						<td><input type="text" name="fuel"></td>
					</tr>
					<tr>
						<td><label>Nombre de places :</label></td>
						<td><input type="number" name="places"></td>
					</tr>
					<tr>
						<td><label>Kilomètrage :</label></td>
						<td><input type="number" name="kilometrage"></td>
					</tr>
					<tr>
						<td><label>Puissance :</label></td>
						<td><input type="text" name="power"></td>
					</tr>
					<tr>
						<td><label>Prix :</label></td>
						<td><input type="number" name="price"></td>
					</tr>
					<tr>
						<td><label>Statut :</label></td>
						<td><input type="number" name="statut"></td>
					</tr>
					<tr>
						<td><label>Commentaires :</label></td>
						<td><input type="text" name="comments"></td>
					</tr>
					<tr>
						<td colspan="2"><button type="submit"> Ajouter </button></td>
					</tr>
				</table>
			</form>
			
			<form action="{{route('deleteCar')}}" method="POST">
				<table><legend>Supprimer un véhicule : </legend>
				<tr>
					<td><label>Marque : </label></td>
					<td><select name="brand_id">
						@foreach ($brands as $brand)
						<option value="{{$brand->id}}">{{$brand->name}}</option>
						@endforeach
					</select></td>
				</tr>
				<tr>
					@csrf
					<td>Modèle :</td>
					<td><select name="car_id">
						@foreach ($cars as $car)
							<option value="{{$car->id}}">{{$car->name}} - {{$car->matricule}}</option>
						@endforeach
					</select></td>
				</tr>
				<tr>
					<td><button type="submit">Supprimer</button></td>
				</tr>
				</table>
			</form>
		</fieldset>
	</div>
	<div class="gestion_bookings">
		<fieldset class="validation_bookings">
		<legend>Gestion des résérvations</legend>
			<table>
				<tr>
					<th>Client</th>
					<th>Véhicule</th>
					<th>Date de début</th>
					<th>Jours demandés</th>
				</tr>
				@foreach ($bookings as $booking)
				<tr>
					
					<td> {{ $booking->customer->fullname }}</td>
					<td> {{ $booking->car->name }}</td>
					<td>{{$booking->date_out}}</td>
					<td>{{$booking->date_in}}</td>
					<td colspan="2"> <a href="{{route('acceptBooking', ['id'=> $booking->id])}}"><button>Accepter</button></a> <a href="{{route('refuseBooking', ['id'=> $booking->id])}}"><button>Refuser</button></a> </td>
				</tr>
				@endforeach
			</table>
		</fieldset>
	</div>
</div>
<!-- <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" >
	$(document).ready(function(){
		$('#run_search_modify').change(function(){
			$.get('getRequest', function(data){
				console.log(data);
			});
		});
	});
</script> -->
@endsection