<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer_group;
use App\Models\Customer;
use App\Models\Customer_type;
// export
use Excel;
// use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\Exportable;
// use Maatwebsite\Excel\Concerns\WithHeadings;
// export

/**
 * 
 */
class CustomerController extends Controller
{
	public function customerGroup(){
		$id = request()->id;
		if($id) {
			$dataEdit = Customer_group::find($id);
		}

		$data = Customer_group::search()->paginate(14);
		return view('admin.customer.customer_group',[
			'dataEdit' => isset($dataEdit) ? $dataEdit : '', 
			'datas' => $data
		]);
	}
	public function saveCustomerGroup(Request $req){
		if($req->id) {
			Customer_group::find($req->id)->update($req->all());
			return redirect()->route('customer_group')->with('success','Cập nhật thành công');
		}
		else {
			Customer_group::create($req->all());
			return redirect()->route('customer_group')->with('success','Thêm mới thành công');
		}
	}
	public function deleteCustomerGroup(){
		$id = request()->id;
		Customer_group::destroy($id);
		return redirect()->route('customer_group')->with('success','Đã xóa nhóm khách hàng');
	}


//customer
	public function customer(){
		if($id = request()->id) {
			$customer = Customer::find($id);
		}
		$cusGroup = Customer_group::where('status',1)->get();
		$customers = Customer::search()->orderBy('id',"DESC")->paginate(14);
		$customer_type = Customer_type::where('status',1)->get();
		// dd($customer->customer_group_id);
		return view('admin.customer.customer',[
			'cusGroup' => $cusGroup,
			'customers' => $customers,
			'customer' => isset($customer) ? $customer : '',
			'customer_type' => isset($customer_type) ? $customer_type : ''
		]);
	}
	public function saveCustomer(Request $req){
		if($id = request()->id) {
			Customer::find($id)->update($req->all());
			return redirect()->route('customer_adm')->with('success','Cập nhật thành công');
		}
		// dd($req->all());
		Customer::create($req->all());
		return redirect()->route('customer_adm')->with('success','Thêm mới thành công');
	}
	public function delete_cus(){
		Customer::destroy(request()->id);
		return redirect()->route('customer_adm')->with('success','Đã xóa khách hàng');
	}

	public function customer_type(){
		if ($id = request()->id) {
			$editCus = Customer_type::find($id);
		}
		$datas = Customer_type::paginate(14);
		return view('admin.customer.customer_type',[
			'datas'=>$datas,
			'editCus'=>isset($editCus) ? $editCus : ''
		]);
	}
	public function save_customer_type(Request $req){
		if($id = request()->id) {
			Customer_type::find($id)->update($req->all());
			return redirect()->route('customer_type')->with('success','Cập nhật thành công');
		}
		Customer_type::create($req->all());
		return redirect()->route('customer_type')->with('success','Thêm mới thành công');
	}
	public function del_customer_type(){
		Customer_type::destroy(request()->id);
		return redirect()->route('customer_type')->with('success','Đã xóa loại khách hàng');
	}
	// export	
	// use Exportable;
	public function export(){
		Excel::create('customer', function($excel) {
	    $excel->sheet('Sheet1', function($sheet) {
	    	$customers = Customer::all();
        // dd($customers);die;
        
        foreach ($customers as $row) {
            $customer[] = array(
                'ID' => $row->id,
                'Email' => $row->email,
                'Tên khách hàng' => $row->name,
                'Tên công ty' => $row->company,
                'Nhóm khách hàng' => isset($row->cusGroup->name) ? $row->cusGroup->name : '',
                'Loại hình' => isset($row->companyType->name) ? $row->companyType->name : '',
                'Loại tài khoản' => $row->account_type == 0 ? 'Cá nhân' : 'Công ty',
                'Lĩnh vực' => $row->business_areas,
                'Thuế' => $row->tax_code,
                'Số điện thoại' => $row->phone,
                'Địa chỉ nhận hàng' => $row->address,
            );
        }
	        $sheet->fromArray(($customer));

	    });

	})->export();
	}
    // export
}