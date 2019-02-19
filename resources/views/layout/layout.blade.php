@extends('layout.main')

@section('contenu')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <div class="mb-4">
                <div class="small mb-3">Search</div>
                <div class="input-group">
                    <input placeholder="Search for..." type="text" class="form-control">
                    <div class="input-group-append">
                        <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <div class="small mb-3">Favorites</div>
                <ul class="nav flex-column nav-pills">
                    <li class="nav-item"><a href="#" class="nav-link active"><i class="fa fa-fw fa-line-chart mr-2"></i>Overview</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-fw fa-calendar-o mr-2"></i>Calendar</a></li>
                </ul>
            </div>
            <div class="mb-4">
                <div class="small mb-3">Projects</div>
                <ul class="nav flex-column nav-pills">
                    <li class="nav-item"><a href="#" class="d-flex nav-link"><i class="fa fa-fw fa-star-o align-self-center mr-2"></i>Analytics Redesign<span class="ml-auto align-self-center badge badge-secondary badge-pill">12</span></a></li>
                    <li class="nav-item"><a href="#" class="d-flex nav-link"><i class="fa fa-fw fa-star-o align-self-center mr-2"></i>New Website<span class="ml-auto align-self-center badge badge-secondary badge-pill">4</span></a></li>
                    <li class="nav-item"><a href="#" class="d-flex nav-link"><i class="fa fa-fw fa-star-o align-self-center mr-2"></i>Chart for Newsletter<span class="ml-auto align-self-center badge badge-secondary badge-pill">9</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-fw fa-plus mr-2"></i>Add New Project</a></li>
                </ul>
            </div>
            <div class="mb-4">
                <div class="small mb-3">People</div>
                <ul class="nav flex-column nav-pills">
                    <li class="nav-item">
                        <a href="#" class="d-flex nav-link">
                            <div class="media">
                                <div class="mr-3 align-self-center media-left media-middle">
                                    <div class="avatar-image avatar-image--loaded">
                                        <div class="avatar avatar--md avatar-image__image">
                                            <div class="avatar__content"><img src="http://bootdey.com/img/Content/avatar/avatar1.png"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="mt-0">Harvey Blick</div><span class="small">Pennsylvania, SD</span></div>
                            </div><i class="fa fa-fw fa-circle text-success ml-auto align-self-center ml-2"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="d-flex nav-link">
                            <div class="media">
                                <div class="mr-3 align-self-center media-left media-middle">
                                    <div class="avatar-image avatar-image--loaded">
                                        <div class="avatar avatar--md avatar-image__image">
                                            <div class="avatar__content"><img src="http://bootdey.com/img/Content/avatar/avatar2.png"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="mt-0">Hobart Hintz</div><span class="small">North Carolina, CT</span></div>
                            </div><i class="fa fa-fw fa-circle text-warning ml-auto align-self-center ml-2"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="d-flex nav-link">
                            <div class="media">
                                <div class="mr-3 align-self-center media-left media-middle">
                                    <div class="avatar-image avatar-image--loaded">
                                        <div class="avatar avatar--md avatar-image__image">
                                            <div class="avatar__content"><img src="http://bootdey.com/img/Content/avatar/avatar3.png"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="mt-0">Elmore Cummerata</div><span class="small">Michigan, NC</span></div>
                            </div><i class="fa fa-fw fa-circle text-danger ml-auto align-self-center ml-2"></i></a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-fw fa-plus mr-2"></i>Add New People</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="d-flex flex-column flex-md-row mb-3 mb-md-0">
                <nav class="mr-auto d-flex align-items-center" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="active breadcrumb-item" aria-current="page"><a href="/"><i class="fa fa-home"></i></a></li>
                        <li class="active breadcrumb-item" aria-current="page">Projects List</li>
                    </ol>
                </nav>
                <div role="toolbar" class="btn-toolbar">
                    <div role="group" class="mr-auto mr-md-2 btn-group"><a class="align-self-center btn btn-secondary active" aria-current="page" id="tooltipShowList" href="/apps/projects/list"><i class="fa-fw fa fa-bars"></i></a><a class="align-self-center btn btn-secondary" id="tooltipShowGrid" href="/apps/projects/grid"><i class="fa-fw fa fa-th-large"></i></a></div>
                    <div role="group" class="btn-group">
                        <button id="tooltipAddNew" class="align-self-center btn btn-primary"><i class="fa-fw fa fa-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="mb-3 Card_custom-card--border_5wJKy card">
                <div class="table-responsive-xl">
                    <table class="mb-0 table table-hover">
                        <thead>
                            <tr>
                                <th class="align-middle bt-0">Star</th>
                                <th class="align-middle bt-0">Project</th>
                                <th class="align-middle bt-0">Status</th>
                                <th class="align-middle bt-0">Tasks Completed</th>
                                <th class="align-middle bt-0">People</th>
                                <th class="align-middle bt-0 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">
                                    <div class="text-inverse"><a href="#"><i class="fa fa-fw fa-lg fa-star-o"></i></a></div>
                                </td>
                                <td class="align-middle">
                                    <div><a href="/apps/tasks/list">Ergonomic real-time adapter</a></div><span>Last Edited by: Savanah Durgan <br>Sunday, 12 June, 2018</span></td>
                                <td class="align-middle"><span class="badge badge-success badge-pill">Active</span></td>
                                <td class="align-middle">
                                    <div class="mb-2 progress" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                    </div>
                                    <div>Tasks Completed:<span class="text-inverse">36/94</span></div>
                                </td>
                                <td class="align-middle">
                                    <div class="avatar-image avatar-image--loaded">
                                        <div class="avatar avatar--md avatar-image__image">
                                            <div class="avatar__content"><img src="http://bootdey.com/img/Content/avatar/avatar1.png"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-right">
                                    <div class="btn-group">
                                        <button type="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-link"><i class="fa fa-gear"></i></button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-folder-open mr-2"></i>View</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-ticket mr-2"></i>Add Task</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-paperclip mr-2"></i>Add Files</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-trash mr-2"></i>Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="text-inverse"><a href="#"><i class="fa fa-fw fa-lg fa-star-o"></i></a></div>
                                </td>
                                <td class="align-middle">
                                    <div><a href="/apps/tasks/list">Stand-alone clear-thinking initiative</a></div><span>Last Edited by: Brando Gutkowski <br>Friday, 12 December, 2018</span></td>
                                <td class="align-middle"><span class="badge badge-danger badge-pill">Suspended</span></td>
                                <td class="align-middle">
                                    <div class="mb-2 progress" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                    </div>
                                    <div>Tasks Completed:<span class="text-inverse">36/94</span></div>
                                </td>
                                <td class="align-middle">
                                    <div class="avatar-image avatar-image--loaded">
                                        <div class="avatar avatar--md avatar-image__image">
                                            <div class="avatar__content"><img src="http://bootdey.com/img/Content/avatar/avatar2.png"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-right">
                                    <div class="btn-group">
                                        <button type="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-link"><i class="fa fa-gear"></i></button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-folder-open mr-2"></i>View</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-ticket mr-2"></i>Add Task</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-paperclip mr-2"></i>Add Files</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-trash mr-2"></i>Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="text-inverse"><a href="#"><i class="fa fa-fw fa-lg fa-star-o"></i></a></div>
                                </td>
                                <td class="align-middle">
                                    <div><a href="/apps/tasks/list">Configurable homogeneous knowledge user</a></div><span>Last Edited by: Wilmer Gorczany <br>Tuesday, 12 June, 2018</span></td>
                                <td class="align-middle"><span class="badge badge-warning badge-pill">Waiting</span></td>
                                <td class="align-middle">
                                    <div class="mb-2 progress" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                    </div>
                                    <div>Tasks Completed:<span class="text-inverse">36/94</span></div>
                                </td>
                                <td class="align-middle">
                                    <div class="avatar-image avatar-image--loaded">
                                        <div class="avatar avatar--md avatar-image__image">
                                            <div class="avatar__content"><img src="http://bootdey.com/img/Content/avatar/avatar3.png"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-right">
                                    <div class="btn-group">
                                        <button type="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-link"><i class="fa fa-gear"></i></button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-folder-open mr-2"></i>View</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-ticket mr-2"></i>Add Task</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-paperclip mr-2"></i>Add Files</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-trash mr-2"></i>Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="text-inverse"><a href="#"><i class="fa fa-fw fa-lg fa-star-o"></i></a></div>
                                </td>
                                <td class="align-middle">
                                    <div><a href="/apps/tasks/list">Progressive 3rd generation superstructure</a></div><span>Last Edited by: Eden Green <br>Sunday, 12 September, 2018</span></td>
                                <td class="align-middle"><span class="badge badge-secondary badge-pill">Paused</span></td>
                                <td class="align-middle">
                                    <div class="mb-2 progress" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                    </div>
                                    <div>Tasks Completed:<span class="text-inverse">36/94</span></div>
                                </td>
                                <td class="align-middle">
                                    <div class="avatar-image avatar-image--loaded">
                                        <div class="avatar avatar--md avatar-image__image">
                                            <div class="avatar__content"><img src="http://bootdey.com/img/Content/avatar/avatar4.png"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-right">
                                    <div class="btn-group">
                                        <button type="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-link"><i class="fa fa-gear"></i></button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-folder-open mr-2"></i>View</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-ticket mr-2"></i>Add Task</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-paperclip mr-2"></i>Add Files</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-trash mr-2"></i>Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="text-inverse"><a href="#"><i class="fa fa-fw fa-lg fa-star-o"></i></a></div>
                                </td>
                                <td class="align-middle">
                                    <div><a href="/apps/tasks/list">Virtual intermediate portal</a></div><span>Last Edited by: Gregoria Hagenes <br>Friday, 12 October, 2018</span></td>
                                <td class="align-middle"><span class="badge badge-success badge-pill">Active</span></td>
                                <td class="align-middle">
                                    <div class="mb-2 progress" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                    </div>
                                    <div>Tasks Completed:<span class="text-inverse">36/94</span></div>
                                </td>
                                <td class="align-middle">
                                    <div class="avatar-image avatar-image--loaded">
                                        <div class="avatar avatar--md avatar-image__image">
                                            <div class="avatar__content"><img src="http://bootdey.com/img/Content/avatar/avatar5.png"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-right">
                                    <div class="btn-group">
                                        <button type="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-link"><i class="fa fa-gear"></i></button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-folder-open mr-2"></i>View</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-ticket mr-2"></i>Add Task</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-paperclip mr-2"></i>Add Files</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-trash mr-2"></i>Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="text-inverse"><a href="#"><i class="fa fa-fw fa-lg fa-star-o"></i></a></div>
                                </td>
                                <td class="align-middle">
                                    <div><a href="/apps/tasks/list">Visionary client-server hardware</a></div><span>Last Edited by: Haskell Mills <br>Monday, 12 July, 2018</span></td>
                                <td class="align-middle"><span class="badge badge-danger badge-pill">Suspended</span></td>
                                <td class="align-middle">
                                    <div class="mb-2 progress" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                    </div>
                                    <div>Tasks Completed:<span class="text-inverse">36/94</span></div>
                                </td>
                                <td class="align-middle">
                                    <div class="avatar-image avatar-image--loaded">
                                        <div class="avatar avatar--md avatar-image__image">
                                            <div class="avatar__content"><img src="http://bootdey.com/img/Content/avatar/avatar6.png"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-right">
                                    <div class="btn-group">
                                        <button type="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-link"><i class="fa fa-gear"></i></button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-folder-open mr-2"></i>View</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-ticket mr-2"></i>Add Task</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-paperclip mr-2"></i>Add Files</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-trash mr-2"></i>Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="text-inverse"><a href="#"><i class="fa fa-fw fa-lg fa-star-o"></i></a></div>
                                </td>
                                <td class="align-middle">
                                    <div><a href="/apps/tasks/list">Focused context-sensitive hardware</a></div><span>Last Edited by: Rey Hansen <br>Friday, 12 May, 2018</span></td>
                                <td class="align-middle"><span class="badge badge-warning badge-pill">Waiting</span></td>
                                <td class="align-middle">
                                    <div class="mb-2 progress" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                    </div>
                                    <div>Tasks Completed:<span class="text-inverse">36/94</span></div>
                                </td>
                                <td class="align-middle">
                                    <div class="avatar-image avatar-image--loaded">
                                        <div class="avatar avatar--md avatar-image__image">
                                            <div class="avatar__content"><img src="http://bootdey.com/img/Content/avatar/avatar7.png"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-right">
                                    <div class="btn-group">
                                        <button type="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-link"><i class="fa fa-gear"></i></button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-folder-open mr-2"></i>View</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-ticket mr-2"></i>Add Task</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-paperclip mr-2"></i>Add Files</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-trash mr-2"></i>Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="text-inverse"><a href="#"><i class="fa fa-fw fa-lg fa-star-o"></i></a></div>
                                </td>
                                <td class="align-middle">
                                    <div><a href="/apps/tasks/list">Advanced mission-critical groupware</a></div><span>Last Edited by: Carey Runolfsson <br>Friday, 12 May, 2018</span></td>
                                <td class="align-middle"><span class="badge badge-secondary badge-pill">Paused</span></td>
                                <td class="align-middle">
                                    <div class="mb-2 progress" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                    </div>
                                    <div>Tasks Completed:<span class="text-inverse">36/94</span></div>
                                </td>
                                <td class="align-middle">
                                    <div class="avatar-image avatar-image--loaded">
                                        <div class="avatar avatar--md avatar-image__image">
                                            <div class="avatar__content"><img src="http://bootdey.com/img/Content/avatar/avatar1.png"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-right">
                                    <div class="btn-group">
                                        <button type="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-link"><i class="fa fa-gear"></i></button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-folder-open mr-2"></i>View</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-ticket mr-2"></i>Add Task</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-paperclip mr-2"></i>Add Files</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-trash mr-2"></i>Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="text-inverse"><a href="#"><i class="fa fa-fw fa-lg fa-star-o"></i></a></div>
                                </td>
                                <td class="align-middle">
                                    <div><a href="/apps/tasks/list">De-engineered tertiary matrix</a></div><span>Last Edited by: Jacynthe Beier <br>Wednesday, 12 May, 2018</span></td>
                                <td class="align-middle"><span class="badge badge-success badge-pill">Active</span></td>
                                <td class="align-middle">
                                    <div class="mb-2 progress" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                    </div>
                                    <div>Tasks Completed:<span class="text-inverse">36/94</span></div>
                                </td>
                                <td class="align-middle">
                                    <div class="avatar-image avatar-image--loaded">
                                        <div class="avatar avatar--md avatar-image__image">
                                            <div class="avatar__content"><img src="http://bootdey.com/img/Content/avatar/avatar2.png"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-right">
                                    <div class="btn-group">
                                        <button type="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-link"><i class="fa fa-gear"></i></button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-folder-open mr-2"></i>View</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-ticket mr-2"></i>Add Task</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-paperclip mr-2"></i>Add Files</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-trash mr-2"></i>Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="text-inverse"><a href="#"><i class="fa fa-fw fa-lg fa-star-o"></i></a></div>
                                </td>
                                <td class="align-middle">
                                    <div><a href="/apps/tasks/list">Progressive 4th generation emulation</a></div><span>Last Edited by: Baby Robel <br>Thursday, 12 March, 2018</span></td>
                                <td class="align-middle"><span class="badge badge-danger badge-pill">Suspended</span></td>
                                <td class="align-middle">
                                    <div class="mb-2 progress" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                    </div>
                                    <div>Tasks Completed:<span class="text-inverse">36/94</span></div>
                                </td>
                                <td class="align-middle">
                                    <div class="avatar-image avatar-image--loaded">
                                        <div class="avatar avatar--md avatar-image__image">
                                            <div class="avatar__content"><img src="http://bootdey.com/img/Content/avatar/avatar3.png"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-right">
                                    <div class="btn-group">
                                        <button type="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-link"><i class="fa fa-gear"></i></button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-folder-open mr-2"></i>View</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-ticket mr-2"></i>Add Task</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-paperclip mr-2"></i>Add Files</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-trash mr-2"></i>Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="text-inverse"><a href="#"><i class="fa fa-fw fa-lg fa-star-o"></i></a></div>
                                </td>
                                <td class="align-middle">
                                    <div><a href="/apps/tasks/list">Sharable even-keeled access</a></div><span>Last Edited by: Ethan Little <br>Saturday, 12 March, 2018</span></td>
                                <td class="align-middle"><span class="badge badge-warning badge-pill">Waiting</span></td>
                                <td class="align-middle">
                                    <div class="mb-2 progress" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                    </div>
                                    <div>Tasks Completed:<span class="text-inverse">36/94</span></div>
                                </td>
                                <td class="align-middle">
                                    <div class="avatar-image avatar-image--loaded">
                                        <div class="avatar avatar--md avatar-image__image">
                                            <div class="avatar__content"><img src="http://bootdey.com/img/Content/avatar/avatar4.png"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-right">
                                    <div class="btn-group">
                                        <button type="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-link"><i class="fa fa-gear"></i></button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-folder-open mr-2"></i>View</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-ticket mr-2"></i>Add Task</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-paperclip mr-2"></i>Add Files</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-trash mr-2"></i>Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="text-inverse"><a href="#"><i class="fa fa-fw fa-lg fa-star-o"></i></a></div>
                                </td>
                                <td class="align-middle">
                                    <div><a href="/apps/tasks/list">Optimized responsive attitude</a></div><span>Last Edited by: Kolby Batz <br>Saturday, 12 February, 2018</span></td>
                                <td class="align-middle"><span class="badge badge-secondary badge-pill">Paused</span></td>
                                <td class="align-middle">
                                    <div class="mb-2 progress" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                    </div>
                                    <div>Tasks Completed:<span class="text-inverse">36/94</span></div>
                                </td>
                                <td class="align-middle">
                                    <div class="avatar-image avatar-image--loaded">
                                        <div class="avatar avatar--md avatar-image__image">
                                            <div class="avatar__content"><img src="http://bootdey.com/img/Content/avatar/avatar5.png"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-right">
                                    <div class="btn-group">
                                        <button type="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-link"><i class="fa fa-gear"></i></button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-folder-open mr-2"></i>View</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-ticket mr-2"></i>Add Task</button>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-paperclip mr-2"></i>Add Files</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-fw fa-trash mr-2"></i>Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center pb-0 card-footer">
                    <nav class="" aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a href="#" class="page-link" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-fw fa-angle-left"></i></span><span class="sr-only">Previous</span></a></li>
                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link" aria-label="Next"><span aria-hidden="true"><i class="fa fa-fw fa-angle-right"></i></span><span class="sr-only">Next</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
