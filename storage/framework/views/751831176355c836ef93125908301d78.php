<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.adminLayout.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminLayout.main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

     <?php $__env->slot('SideBarActiveIn', null, []); ?> 
        active
     <?php $__env->endSlot(); ?>
    <div class="container">

        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="mb-0">Kitoblar</h4>
                    <a class="btn btn-warning" href="#">Qo'shish</a>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-white">
                                <th scope="col">Sarlavha</th>
                                <th scope="col">Muallif</th>
                                <th scope="col">Sahifalar soni</th>
                                <th scope="col">Chop etilgan sana</th>
                                <th scope="col">Janri</th>
                                <th scope="col">Asar haqida</th>
                                <th scope="col"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Qo'rqma</td>
                                <td>Javlon Jovliyev</td>
                                <td>376</td>
                                <td>2021</td>
                                <td>Tarixiy</td>
                                <td style="overflow: hidden; width: 10px !important;">;ijflasfeifjlafikjlsa</td>
                                <td style="display: flex; justify-content: space-evenly;">
                                    <a class="btn btn-sm btn-success" href="#">
                                        <img src="./adminImg/edit.png" alt="edit icon" width="20px" height="20px">
                                    </a>
                                    <a class="btn btn-sm btn-primary" href="#">
                                        <img src="./adminImg/delete.png" alt="delete icon" width="20px" height="20px">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Recent Sales End -->

    </div>
    <!-- Content End -->

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH /Users/bek/Documents/HomeCleaningAdminPage/resources/views/adminPage/index.blade.php ENDPATH**/ ?>