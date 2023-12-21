<div class="sidebar" data="blue" >
<!--Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"		-->
	<div class="sidebar-wrapper">
		<div class="logo">
			<a href="javascript:void(0)" class="simple-text logo-mini">
				<img src="<?=base_url()?>assets/img/PT Tirta Varia Intipratama.png" alt="Logo" style="width:80px;">
			</a>
			<a href="javascript:void(0)" class="simple-text logo-normal">Checklist Maintenance</a>
		</div>
		<ul class="nav">
			<li class="<?=($this->uri->segment(2)===NULL)?'active':''?>">
				<a href="<?=base_url('home2')?>">
			    <!--<i class="tim-icons icon-chart-pie-36"></i><p>Dashboard</p>-->
			    <i class="fas fa-tachometer-alt"></i><p>Dashboard</p>
			    </a>
			</li>
			<li class="<?=($this->uri->segment(2)==='report')?'active':''?>">
				<a href="<?=base_url('home2/report')?>">
			    <!--<i class="tim-icons icon-chart-pie-36"></i><p>Dashboard</p>-->
			    <i class="fas fa-book-open"></i><p>Maintenance Report</p>
			    </a>
			</li>
			<li class="">
				<a data-toggle="collapse" href="#maintenance">
			        <i class="fas fa-clipboard-list"></i>
			    	<p>Form Maintenance<b class="caret"></b></p>
			    </a>
			    <div class="collapse" id="maintenance">
			    	<ul class="nav">
			        	<li>
			                  <a href="#">
			                    <span class="sidebar-mini-icon"><i class="fas fa-desktop"></i></span>
			                    <span class="sidebar-normal"> Komputer </span>
			                  </a>
			                </li>
			                <li>
			                  <a href="#">
			                    <span class="sidebar-mini-icon"><i class="fas fa-laptop"></i></span>
			                    <span class="sidebar-normal"> Laptop </span>
			                  </a>
			                </li>
							<li>
			                  <a href="#">
			                    <span class="sidebar-mini-icon"><i class="fas fa-laptop"></i></span>
			                    <span class="sidebar-normal"> Perangkat Lainnya </span>
			                  </a>
			                </li>		               
			              </ul>
			            </div>
			          </li>
			        </ul>
				</div>
			</div>