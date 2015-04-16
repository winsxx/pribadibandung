<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class DataDiriRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			/*$calonsiswa->nama=$input['name'];
			$calonsiswa->alamat=$input['address'];
			$calonsiswa->tmpt_lahir=$input['dateofbirth'];
			$calonsiswa->tgl_lahir=$input['placeofbirth'];
			$calonsiswa->gender=$input['gender'];
			$calonsiswa->no_hp=$input['phoneNumber'];
			$calonsiswa->asal_sekolah=$input['school_before'];*/

			'name' => 'required',
			'address' => 'required',
			'dateofbirth' => 'required',
			'placeofbirth' => 'required',			
			'phoneNumber' => 'required|min:11',
			'school_before' => 'required',			
		];
	}

}
