@extends('main')

@section('main-content')
<div id="wrap">
    <div class="clear" style="height:5px;"></div>
    <div id="wrap2">
      <h1>Add Product</h1>
      <br>

      <div class="form-raw">
        <div class="form-name">Select Category</div>
        <div class="form-txtfld">
          <select>
            <option>Select Option</option>
            <option></option>
            <option></option>
          </select>
        </div>
      </div>
      <div class="clear"></div>


      <div class="form-raw">
        <div class="form-name">Select Sub Category</div>
        <div class="form-txtfld">
          <select multiple="select" style="height: 100px;">
            <option>Select Option</option>
            <option></option>
            <option></option>
          </select>
        </div>
      </div>
      <div class="clear"></div>



      <div class="form-raw">
        <div class="form-name">Product Name</div>
        <div class="form-txtfld">
          <input type="text">
        </div>
      </div>

      <div class="form-name">Product Image1</div>
      <div class="form-txtfld">
        <input type="file">
        <div class="form-name"> Image Size ( Width=560px, Height=390px ) (Product page)</div>
      </div>
    </div>
    <div class="form-raw" style="width:100%;">
      <div class="form-name">Short Description</div>
      <div class="form-txtfld">
        <textarea></textarea>
      </div>
    </div>

    <div class="clear"></div>
    <h1 style="border-bottom: 1px solid #CCC; padding-bottom: 10px; margin: 20px 0 0px 0;">Description</h1>
    <br>
    <div class="form-raw">
      <div class="form-name"> &nbsp;</div>
      <div class="form-txtfld">
        <input type="text" placeholder="Title">
      </div>
    </div>
    <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="heading"></div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="desciption"></div>
      <a href="#"><img src="images/delete.gif" alt=""></a>
    </div>
    <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld" style="width: 320px; text-align: right;"><a href="#">Add More +</a></div>
    </div>



    <div class="form-raw">
      <div class="form-name"> &nbsp;</div>
      <div class="form-txtfld">
        <input type="text" placeholder="Title">
      </div>
    </div>
    <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="heading"></div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="desciption"></div> <a href="#"><img
          src="images/delete.gif" alt=""></a>
    </div>
    <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld" style="width: 320px; text-align: right;"><a href="#">Add More +</a></div>
    </div>



    <div class="form-raw">
      <div class="form-name"> &nbsp;</div>
      <div class="form-txtfld">
        <input type="text" placeholder="Title">
      </div>
    </div>
    <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="heading"></div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="desciption"></div>
      <a href="#"><img src="images/delete.gif" alt=""></a>
    </div>
    <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld" style="width: 320px; text-align: right;"><a href="#">Add More +</a></div>
    </div>

    <!--  <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="heading"></div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="desciption"></div>
      <a href="#"><img src="images/delete.gif" alt=""></a>      
  </div> -->







    <div class="clear"></div>
    <h1 style="border-bottom: 1px solid #CCC; padding-bottom: 10px; margin: 20px 0 0px 0;">Features</h1>
    <br>
    <div class="form-raw" style="width:100%;">
      <div class="form-name">Content</div>
      <div class="form-txtfld" style="width:780px;">
        <textarea style="width:100%; height:500px;">CK</textarea>
      </div>
    </div>
    <div class="clear"></div>
    <h1 style="border-bottom: 1px solid #CCC; padding-bottom: 10px; margin: 20px 0 0px 0;">Upload PDF</h1>
    <br>

    <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="PDF heading"></div>
      <div class="form-txtfld txtfld50"><input type="file" placeholder="desciption"></div>
    </div>
    <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld" style="width: 320px; text-align: right;"><a href="#">Add More +</a></div>
    </div>

    <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="PDF heading"></div>
      <div class="form-txtfld txtfld50"><input type="file" placeholder="desciption"></div>
    </div>
    <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld" style="width: 320px; text-align: right;"><a href="#">Add More +</a></div>
    </div>

    <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="PDF heading"></div>
      <div class="form-txtfld txtfld50"><input type="file" placeholder="desciption"></div>
      <a href="#"><img src="images/delete.gif" alt=""></a>
    </div>




    <!-- <div class="form-raw">
      <div class="form-name">Heading</div>
      <div class="form-txtfld">
        <input type="text">
      </div>
    </div> 
     <div class="form-raw">
      <div class="form-name">PDF</div>
      <div class="form-txtfld">
        <input type="file">
      </div>
    </div> -->



    <div class="clear"></div>
    <div class="form-raw">
      <div class="form-name">Active</div>
      <div class="form-txtfld">
        <input type="checkbox">
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld">
        <input type="button" class="btn" value="Submit">
      </div>
    </div>
  </div>
  <div class="clear">&nbsp;</div>
  </div>
  <div id="wrap2">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="admintable">
      <tr>
        <th width="53" align="left" valign="middle">Sr.No.</th>
        <th width="153" align="left" valign="middle">Select Category</th>
        <th width="71" align="left" valign="middle"> Select Sub Category</th>
        <th width="71" align="left" valign="middle"> Product Name</th>

        <th width="408" align="left" valign="middle">Short Description</th>
        <th width=" " align="left" valign="middle">Full Description</th>
        <th width="49" align="left" valign="middle">Status</th>

        <th width="49" align="left" valign="middle">Edit</th>
        <th width="61" align="left" valign="middle">Remove</th>
      </tr>
      <tr>
        <td align="left" valign="top">1</td>
        <td align="left" valign="top">Lorem .</td>
        <td align="left" valign="top">Lorem .</td>
        <td align="left" valign="top">dfdd</td>

        <td align="left" valign="top">fdfd</td>
        <td align="left" valign="top">fdfd</td>


        <td align="left" valign="top"><strong>Active</strong></td>
        <td align="left" valign="top"><a href="#">Edit</a></td>
        <td align="center" valign="top"><a href="#"><img src="images/icon-bin.jpg" alt="" width="25" height="25"
              border="0" align="absmiddle" /></a></td>
      </tr>
    </table>
    <div class="clear">&nbsp;</div>
  </div>
  <div class="clear"></div>
@endsection